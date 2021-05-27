<?php

namespace App\Notifications;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
class AddOrder extends Notification
{
    use Queueable;
     public $order;

     /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {

        $this->category=$category;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */


    public function toDatabase($notifiable)
    {
        return [
        //    'data' => $this->details['body'],
        // 'id'=>$this->order->id,
        'title'=>"nEew category add by ",
        'user'=> Auth::user()->name,
    ];
    }

}
