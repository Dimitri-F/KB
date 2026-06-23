<?php

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

/*
|--------------------------------------------------------------------------
| Anti-spam
|--------------------------------------------------------------------------
*/

if (!empty($_POST['website'])) {
    exit;
}

/*
|--------------------------------------------------------------------------
| Récupération des données
|--------------------------------------------------------------------------
*/

$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$message = trim($_POST['message'] ?? '');

if (
    empty($nom) ||
    empty($email) ||
    empty($message)
) {
    die('Tous les champs obligatoires doivent être remplis.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Adresse email invalide.');
}

/*
|--------------------------------------------------------------------------
| Envoi du mail
|--------------------------------------------------------------------------
*/

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $_ENV['MAIL_PORT'];

    $mail->CharSet = 'UTF-8';

    $mail->setFrom(
        $_ENV['MAIL_USERNAME'],
        'Site KB Food Truck'
    );

    $mail->addAddress($_ENV['MAIL_TO']);

    $mail->Subject = 'Nouveau message depuis le site KB';

    $mail->isHTML(true);

    $mail->Body = "
        <h2>Nouveau message reçu</h2>

        <p><strong>Nom :</strong> " . htmlspecialchars($nom) . "</p>

        <p><strong>Email :</strong> " . htmlspecialchars($email) . "</p>

        <p><strong>Téléphone :</strong> " . htmlspecialchars($telephone) . "</p>

        <p><strong>Message :</strong></p>

        <p>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $mail->send();

    header('Location: privatisation.php?success=1');
    exit;

} catch (Exception $e) {

    error_log($mail->ErrorInfo);

    header('Location: privatisation.php?error=1');
    exit;
}