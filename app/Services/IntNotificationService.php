<?php

namespace App\Services;

interface IntNotificationService
{
    public function addNotification($userId, $type, $postId);
}