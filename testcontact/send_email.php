<?php
require 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include PHPMailer autoloader
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php'; // Add this line to import the SMTP class

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP; // Add this line to import the SMTP class

// Create an instance of PHPMailer
$mail = new PHPMailer();

// Configure SMTP settings for Hostinger
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->SMTPAuth = true;
$mail->Username = 'contact@orcasia.org';
$mail->Password = 'Contact1234!';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set sender and recipient
$mail->setFrom($_POST['contact@orcasia.org'], $_POST['ORCA']);
$mail->addAddress('contact@orcasia.org', 'ORCA');

// Set email subject and body
$mail->Subject = $_POST['subject'];
$mail->Body = "Name: {$_POST['name']}<br>Email: {$_POST['email']}<br>Message: {$_POST['message']}";

// Enable debug mode
$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;
$mail->Debugoutput = 'html';

// Send the email
if ($mail->send()) {
    // Redirect with success message
    header('Location: https://orcasia.org/pages/contact?message=success');
    exit();
} else {
    // Redirect with error message
    header('Location: https://orcasia.org/pages/contact?message=error');
    exit();
}
?>


              <?php
$message = $_GET['message'] ?? ''; // Retrieve the message query parameter

if ($message === 'success') {
    echo 'Message sent successfully!';
} elseif ($message === 'error') {
    echo 'Error in sending the message. Please try again.';
} else {
    echo 'Unexpected error occurred.';
}
?>
