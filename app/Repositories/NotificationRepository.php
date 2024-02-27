<?php

namespace App\Repositories;

use App\Models\Notifiication;

class NotificationRepository implements IntNotificationRepository
{
    

    public function getNotifications()
    {

        $notifications = Notifiication::where('rode', 0)
                ->with('post.user')
                ->get();

            $notifications = $notifications->filter(function ($notification) {

                if ($notification->post && $notification->post->user) {
                    return $notification->post->user->id == auth()->user()->id;
                } else {
                    return false;
                }
            });

            return  $notifications;
    }

    public function readNotification($notifid)
    {
        Notifiication::where('id', $notifid)
             ->update(['rode' => 1]);
    }
    
}