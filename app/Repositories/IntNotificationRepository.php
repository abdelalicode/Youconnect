<?php

namespace App\Repositories;


interface IntNotificationRepository
{
    
    public function getNotifications();
    public function readNotification($notifid);
    

}