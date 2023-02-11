<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $messageContent;
    public $subject;
    public string $formType;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        string $name = null,
        string $email = null,
        string $messageContent = null,
        ?string $subject = null,
        ?string $formType = 'contact-form'
    ) {
        if (!\in_array($formType, ['contact-form', 'user-feedback'], \true)) {
            throw new \Exception(
                'O formType precisa ser um desses: ' . \implode(', ', [
                    'contact-form', 'user-feedback'
                ])
            );
        }

        $this->name = $name ?? '';
        $this->email = $email ?? '';
        $this->messageContent = $messageContent ?? '';
        $this->formType = $formType;

        if ($formType === 'user-feedback') {
            if (!$messageContent) {
                throw new \Exception(
                    "O campo 'messageContent' é obrigatório quando for um '{$formType}'"
                );
            }
        }

        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /**
         * @var string $view
         */
        $view = $this->formType;

        /**
         * @var ContactForm $mail
         */
        $mail = $this->view("emails.{$view}", [
            'name' => $this->name,
            'email' => $this->email,
            'messageContent' => $this->messageContent,
            'formType' => $this->formType,
        ]);

        if ($this->subject) {
            $mail->subject($this->subject);
        }

        return $mail;
    }
}
