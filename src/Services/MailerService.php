<?php


namespace App\Services;


use Swift_Mailer;
use Twig\Environment;

class MailerService
{

    protected $mailer;
    protected $templating;

    public function __construct(Swift_Mailer $mailer, Environment $environment)
    {
        $this->mailer = $mailer;
        $this->templating = $environment;
    }

    public function sendMail($email, $content)
    {
        $message = (new \Swift_Message('Message envoyé avec Swift Mailer'))
            ->setFrom($email)
            ->setBody(
                $this->templating->render(
                    'emails/sending_template.html.twig',
                    [
                        'email' => $email,
                        'content' => $content
                    ]
                ),
                'text/html'
            );

        $this->mailer->send($message);
    }


}
