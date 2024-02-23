<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notifiication;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user();

        if ($user) {
            $followedUserIds = $user->followees()->pluck('id');

            $followedUserIds->push($user->id);

            $followees = User::whereNotIn('id', $followedUserIds)->get();
        } else {
            $followees = null;
        }

        $posts = Post::orderBy('created_at', 'desc')
            ->with('comments.user')
            ->withCount('likers')
            ->get();

        if (auth()->check()) {
            $notifications = Notifiication::where('rode', 0)
                ->with('post.user')
                ->get();
            $follownotifications = Notifiication::where('rode', 0)
                ->get();

            $notifications = $notifications->filter(function ($notification) {

                if ($notification->post && $notification->post->user) {
                    return $notification->post->user->id == auth()->user()->id;
                } else {
                    return false;
                }
            });
        } else {
            $notifications = null;
        }



        return view('home.home', compact('posts', 'followees', 'notifications', 'follownotifications'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
