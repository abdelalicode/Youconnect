<?php

namespace App\Repositories;

use App\Models\Notifiication;

class NotificationRepository implements IntNotificationRepository
{
    
    
    public function __construct()
    {

    }

    public function getNotifications()
    {

        $notifications = Notifiication::with('post.user')
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


    public function check($userId, $type, $postId)
    {
       
       return Notifiication::where('user_id', $userId)
                        ->where('type', $type)
                        ->where('post_id', $postId)
                        ->exists();
    }


    public function addNotification($userId, $type, $postId)
    {
        Notifiication::create([
            'user_id' => $userId,
            'type' => $type,
            'post_id' => $postId,
        ]);
    }
    
}