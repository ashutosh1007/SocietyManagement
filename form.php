<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['action'])){
        $action = $_POST['action'];      
        $category = array();
        if( $action == "create_enquiry" ){
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            $name = $_POST['contact_name'];
            $company_name = $_POST['company_name'];
            $your_message = $_POST['your_message'];
            $categories = join(', ', $_POST['category']);
            $email = $_POST['email'];
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'amamsingh1407@gmail.com';                     // SMTP username
            $mail->Password   = 'Sih@2020';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('amamsingh1407.com', 'Enquiry');
            $mail->addAddress('ashutoshtambe1007@gmail.com', 'Company');
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Enquiry';
            $mail->Body    = '<h1>Name:</h1> <h2>'.$name .'</h2> <br><h1>Email:</h1> <h2>'.$email .'</h2> <br><h1>Company Name:</h1> <h2>'.$company_name .'</h2> <br><h1><h1>Message:</h1> <h2>'.$your_message .'</h2><br><h1>I would like to receive information about the</h1> <h2>'.$categories. '</h2>';

            $mail->send();
            echo 'Message has been sent';
        } 
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}
}