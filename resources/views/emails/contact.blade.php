<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
</head>
<body style="font-family: Arial, sans-serif; color: #222;">
    <h2>Nouveau message via le formulaire de contact</h2>
    <table cellpadding="6" style="border-collapse: collapse;">
        <tr>
            <td><strong>Nom</strong></td>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <td><strong>Sujet</strong></td>
            <td>{{ $data['subject'] }}</td>
        </tr>
        <tr>
            <td valign="top"><strong>Message</strong></td>
            <td>{{ $data['message'] }}</td>
        </tr>
    </table>
</body>
</html>
