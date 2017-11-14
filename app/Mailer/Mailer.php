<?php
// skyfoodresponse@gmail.com Pinkteam@@123

namespace App\Mailer;

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mailer
{
    public $mail;
    protected $name;
    protected $emailTo;
    protected $subject;
    protected $content;

    public function __construct()
    {
        $this->mail = new PHPMailer(true); // Passing `true` enables exceptions
        $this->name = 'Guess';
        $this->content = 'This is content';
        $this->subject = 'Response from Sky Food';
    }

    public function setEmailTo($emailTo, $name = 'Guess')
    {
        $this->name = $name;
        $this->emailTo = $emailTo;
    }

    public function setContent($content, $subject = 'Response from Sky Food')
    {
        $this->subject = $subject;
        $this->content = $content;
    }

    public function sendMail()
    {
        try {
            //Server settings
            // $mail->SMTPDebug = 2; // Enable verbose debug output
            $this->mail->isSMTP(); // Set mailer to use SMTP
            $this->mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP serversdd
            $this->mail->SMTPAuth = true; // Enable SMTP authentication
            $this->mail->Username = 'skyfoodresponse@gmail.com'; // SMTP username
            $this->mail->Password = 'Pinkteam@@123'; // SMTP password
            $this->mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $this->mail->Port = 587; // TCP port to connect to
            //Recipients
            $this->mail->setFrom('skyfoodresponse@gmail.com', 'Sky Food');
            //$this->mail->addAddress($this->emailTo, $this->name); // Add a recipient
            $this->mail->addAddress($this->emailTo, $this->name); // Add a recipient

            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

            //Content
            $this->mail->isHTML(true); // Set email format to HTML
            $this->mail->Subject = $this->subject;
            $this->mail->Body = $this->content;
            // $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $this->mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
        }
    }
}
