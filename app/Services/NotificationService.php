<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\IntNotificationRepository;

class NotificationService implements IntNotificationService
{

    private $notificationRepository;

    public function __construct(IntNotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }
    

    public function addNotification($userId, $type, $postId)
    {
        if($this->notificationRepository->check($userId, $type, $postId))
        {
            return redirect()->route('homepage');
        }

        $post = Post::find($postId);

        if ($post && $userId == $post->user->id)
        {
            return redirect()->route('homepage');
        }
    
       
       
        $this->notificationRepository->addNotification($userId, $type, $postId);
      
    }
}