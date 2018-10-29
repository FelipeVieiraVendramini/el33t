<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class UserRegisteredSuccessfully extends Notification
{
    use Queueable;

    protected $user;

    /**
     * Create a new notification instance.
     *
     * @param User $user
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $user = $this->user;

        return (new MailMessage)
            ->from(env('ADMIN_MAIL'))
            ->subject(env('APP_NAME') . ' - Falta apenas um passo')
            ->greeting(sprintf('Hello %s', $user->username))
            ->line('Nossos sistemas receberam o seu pedido com sucesso. Para prosseguir, por favor, clique no link
                    de ativação abaixo para que possamos concluir o processo de cadastro.')
            ->action('Clique aqui', route('activate.user', $user->hash))
            ->line('Agradecemos a escolha de nosso aplicativo!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
