<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


if($_SERVER["REQUEST_METHOD"] == "POST") {
    

    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    

    echo "<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Données du formulaire</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #3a86ff 0%, #8338ec 100%);
                margin: 0;
                padding: 40px 20px;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
            }
            .card {
                background: white;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            }
            h2 {
                color: #333;
                margin-bottom: 30px;
                text-align: center;
                font-size: 2em;
            }
            .info-item {
                margin-bottom: 20px;
                padding: 15px;
                background: #f8f9fa;
                border-radius: 10px;
                border-left: 5px solid #3a86ff;
            }
            .info-label {
                font-weight: bold;
                color: #3a86ff;
                margin-bottom: 5px;
                font-size: 1.1em;
            }
            .info-value {
                color: #333;
                font-size: 1.1em;
                word-wrap: break-word;
            }
            .btn {
                display: inline-block;
                padding: 12px 30px;
                background: linear-gradient(135deg, #3a86ff 0%, #8338ec 100%);
                color: white;
                text-decoration: none;
                border-radius: 50px;
                margin-top: 20px;
                transition: transform 0.3s;
                border: none;
                cursor: pointer;
                font-size: 1em;
            }
            .btn:hover {
                transform: translateY(-3px);
            }
            .btn-container {
                text-align: center;
            }
            .debug-info {
                margin-top: 30px;
                padding: 20px;
                background: #e9ecef;
                border-radius: 10px;
                font-family: monospace;
            }
            .debug-info pre {
                margin: 0;
                white-space: pre-wrap;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='card'>
                <h2> Informations reçues</h2>";
    
    if(!empty($name) && !empty($email) && !empty($message)) {
        echo "<div class='info-item'>
                <div class='info-label'>👤 Nom :</div>
                <div class='info-value'>$name</div>
              </div>
              <div class='info-item'>
                <div class='info-label'> Email :</div>
                <div class='info-value'>$email</div>
              </div>
              <div class='info-item'>
                <div class='info-label'> Sujet :</div>
                <div class='info-value'>" . ($subject ?: 'Non spécifié') . "</div>
              </div>
              <div class='info-item'>
                <div class='info-label'> Message :</div>
                <div class='info-value'>$message</div>
              </div>";
    } else {
        echo "<div class='info-item' style='border-left-color: #dc3545;'>
                <div class='info-label' style='color: #dc3545;'> Erreur :</div>
                <div class='info-value'>Tous les champs obligatoires n'ont pas été remplis.</div>
              </div>";
    }
    
    echo "<div class='btn-container'>
            <a href='javascript:history.back()' class='btn'>← Retour au formulaire</a>
          </div>
          
        
          </div>
        </div>
    </body>
    </html>";
} else {

    header('Location: index.html#contact');
    exit();
}
?>