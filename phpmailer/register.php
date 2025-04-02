<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Load PHPMailer
require '../includes/PHPMailer/src/Exception.php';
require '../includes/PHPMailer/src/PHPMailer.php';
require '../includes/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // SMTP Debugging
        $mail->SMTPDebug = 2; 
        $mail->Debugoutput = 'html';

        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com';
        $mail->Password = 'your-app-password'; // Use App Password, not normal password
        $mail->SMTPSecure = 'tls'; // Fixing encryption error
        $mail->Port = 587;

        // Sender & Recipient
        $mail->setFrom('your-email@gmail.com', 'Perfection Academy');
        $mail->addAddress('admin@example.com');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Registration from Perfection Academy';
        $mail->Body = "
            <h3>New Registration Details:</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Category:</strong> $category</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Send Email
        if ($mail->send()) {
            echo "success";
        } else {
            echo "Error sending email.";
        }
    } catch (Exception $e) {
        echo "Mailer Error: " . $e->getMessage(); // Fixing ErrorInfo
    }
}
?>
