<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Mail\NewsletterSubscription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(): \Illuminate\View\View
    {
        return view('pages.contact');
    }

    public function subscribeNewsletter(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ]);

        Mail::to(config('mail.contact_recipient', config('mail.from.address')))
            ->send(new NewsletterSubscription($data['email']));

        return back()->with('status', 'Merci pour votre inscription à la newsletter !');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(config('mail.contact_recipient', config('mail.from.address')))
            ->send(new ContactMessage($data));

        return back()->with('status', 'Votre message a bien été envoyé. Nous vous répondrons rapidement.');
    }
}
