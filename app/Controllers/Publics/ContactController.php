<?php

namespace App\Controllers\Publics;

use App\Mailer\Mailer;
use App\Models\Feedback;

class ContactController
{
    protected $feedback;
    protected $mailer;

    public function __construct()
    {
        $this->feedback = new Feedback;
        $this->mailer = new Mailer;
    }

    public function index()
    {
        return view('public/contact/index');
    }

    public function create()
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $content = $_POST['content'];
        $email = $_POST['email'];

        $this->feedback->createFeedback($name, $phone, $email, $content);
        $_SESSION['notice_contact'] = 'Bạn đã gửi phản hồi thành công';

        $this->mailer->setEmailTo($email);
        $content = 'Hệ thống đã nhận được ý kiến đóng góp từ bạn lúc ' . strtoupper(date('h:i:sa')) . ' ngày ' . date('d/m/Y');
        $content .= '<br><br>';
        $content .= 'Chúng tôi sẽ ghi nhận đóng góp của bạn để <strong>Sky Food</strong> hoàn thiện hơn.';
        $content .= '<br><br>';
        $content .= 'Xin chân thành cảm ơn.';
        $content .= '<br><br>';
        $content .= '<i>From: Sky Food<i>';
        $this->mailer->setContent($content);
        $this->mailer->sendMail();

        redirect('contact');
    }
}
