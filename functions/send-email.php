<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../modules/PHPMailer/src/Exception.php';
require '../modules/PHPMailer/src/PHPMailer.php';
require '../modules/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $company = htmlspecialchars($_POST['company']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $connnect = htmlspecialchars($_POST['connnect']);
    $comments = htmlspecialchars($_POST['comments']);

    $mail = new PHPMailer;

    // Enable SMTP debugging for testing purposes
    $mail->SMTPDebug = 2; // Or SMTP::DEBUG_SERVER
    $mail->Debugoutput = 'html';

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->SMTPSecure = 'ssl'; // SSL encryption
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465; // Port for SSL
        $mail->Username = 'towwolf1@gmail.com'; // Replace with your email
        $mail->Password = 'ylym ugjo hzqd dhad'; // Replace with your App Password

        // Email settings
        $mail->setFrom('towwolf1@gmail.com', 'Contact Form'); // Sender email and name
        $mail->addAddress('towwolf1@gmail.com'); // Recipient email
        $mail->Subject = 'Contact Form Submission';
        $mail->Body = "
            Name: $name\n
            Company: $company\n
            Phone: $phone\n
            Email: $email\n
            How did you hear about us?: $connnect\n
            Questions/Comments: $comments
        ";

        // Send email
        if ($mail->send()) {
            header('Location: index.php');
            
        } else {
            echo "ERROR: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>
