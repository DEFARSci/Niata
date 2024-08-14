<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Voiture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #dddddd;
        }
        .header img {
            max-width: 100px;
        }
        .content {
            padding: 20px;
        }
        .content h1 {
            color: #333333;
        }
        .content p {
            color: #555555;
            line-height: 1.6;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #dddddd;
            margin-top: 20px;
        }
        .footer p {
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('icone/logo.png') }}" alt="NIATA" width="80" height="60">
        </div>
        <div class="content">
            <h1>Demande personnalisée</h1>
            <p><strong>Demande fait par :</strong> {!!$nom!!}</p>
            <p><strong>Email :</strong> {!!$email!!}</p>
            <p><strong>Téléphone :</strong> {!!$telephone!!}</p>
            <p><strong>Voiture demandée :</strong> {!!$marque!!} {!!$modele!!}</p>
            <p><strong>Information :</strong>{!!$infoSupp!!} </p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Niata. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
