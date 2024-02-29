<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLikeRequest;
use App\Http\Requests\UpdateLikeRequest;
use App\Models\Notifiication;
use App\Models\Post;
use App\Repositories\IntNotificationRepository;
use App\Repositories\NotificationRepository;
use App\Services\IntNotificationService;
use App\Services\NotificationService;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private $notificationService;

     public function __construct(IntNotificationService $notificationService)
     {
         $this->notificationService = $notificationService;
     }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLikeRequest $request)
    {
        // $likes = Like::where('user_id' ,$request->user_id)->where('post_id', $request->post_id);

        // if($likes)
        // {
        //     $this->destroy($likes);
        // }

        // $addlike = Like::create($request->validated());
        // return redirect()->route('homepage');

        $postObj = Post::findorFail($request->post_id);

        if ($postObj->likers()->wherePivot('user_id', $request->user_id)->exists()) {
            $postObj->likers()->detach($request->user_id);
        } else {
            $postObj->likers()->toggle($request->user_id);

            // Notifiication::create([
            //     'user_id' => auth()->user()->id,
            //     'type' => 'like',
            //     'post_id' => $request->post_id,
            // ]);

            $this->notificationService->addNotification(auth()->user()->id, 'like', $request->post_id);
        }


        return redirect()->route('homepage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLikeRequest $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
    }
}
