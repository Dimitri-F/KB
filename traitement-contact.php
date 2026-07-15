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
$prenom = trim($_POST['prenom'] ?? '');
$email = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$date_evenement = trim($_POST['date_evenement'] ?? '');
$nb_personnes = trim($_POST['nb_personnes'] ?? '');
$lieu_evenement = trim($_POST['lieu_evenement'] ?? '');
$message = trim($_POST['message'] ?? '');

/*
|--------------------------------------------------------------------------
| Formatage de la date
|--------------------------------------------------------------------------
*/

$date_evenement_formatee = '';

if (!empty($date_evenement)) {
    $date = DateTime::createFromFormat('Y-m-d', $date_evenement);

    if ($date !== false) {
        $date_evenement_formatee = $date->format('d-m-Y');
    }
}

if (
    empty($nom) ||
    empty($prenom) ||
    empty($email) ||
    empty($telephone) ||
    empty($date_evenement) ||
    empty($nb_personnes) ||
    empty($lieu_evenement) ||
    empty($message)
) {
    die('Tous les champs sont obligatoires.');
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

    $mail->Subject = 'Nouvelle demande de privatisation - Site KB';

    $mail->isHTML(true);

    $mail->Body = "<h2>Nouvelle demande de privatisation</h2>

<table cellpadding='8' cellspacing='0' border='1' style='border-collapse:collapse;font-family:Arial,sans-serif;'>

<tr>
<td><strong>Nom</strong></td>
<td>" . htmlspecialchars($nom) . "</td>
</tr>

<tr>
<td><strong>Prénom</strong></td>
<td>" . htmlspecialchars($prenom) . "</td>
</tr>

<tr>
<td><strong>Email</strong></td>
<td>" . htmlspecialchars($email) . "</td>
</tr>

<tr>
<td><strong>Téléphone</strong></td>
<td>" . htmlspecialchars($telephone) . "</td>
</tr>

<tr>
<td><strong>Date de l'événement</strong></td>
<td>" . htmlspecialchars($date_evenement_formatee) . "</td>
</tr>

<tr>
<td><strong>Nombre de personnes</strong></td>
<td>" . htmlspecialchars($nb_personnes) . "</td>
</tr>

<tr>
<td><strong>Lieu de l'événement</strong></td>
<td>" . htmlspecialchars($lieu_evenement) . "</td>
</tr>

</table>

<h3>Message</h3>

<p>" . nl2br(htmlspecialchars($message)) . "</p>

";

    $mail->addReplyTo($email, $prenom . ' ' . $nom);

    $mail->send();

    header('Location: privatisation.php?success=1');
    exit;
} catch (Exception $e) {

    error_log($mail->ErrorInfo);

    header('Location: privatisation.php?error=1');
    exit;
}
