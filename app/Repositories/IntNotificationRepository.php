<?php

namespace App\Repositories;


interface IntNotificationRepository
{   
    public function getNotifications();

    public function readNotification($notifid);

    public function check($userId, $type, $postId);
    
    public function addNotification($userId, $type, $postId);
    
}