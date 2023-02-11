<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Novo contato</h1>
    <table>
        <tbody>
            <tr>
                <th style="text-align: left;">Tipo:</th>
                <td style="text-align: left;">{{ $formType }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">Data:</th>
                <td style="text-align: left;">{{ date('Y-m-d H:i') }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">Nome:</th>
                <td style="text-align: left;">{{ $name }}</td>
            </tr>
            <tr>
                <th style="text-align: left;">E-mail:</th>
                <td style="text-align: left;">{{ $email }}</td>
            </tr>
            <tr>
                <th colspan="100%" style="text-align: left;">Menssagem:</th>
            </tr>
            <tr>
                <td colspan="100%">{{ $messageContent }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
