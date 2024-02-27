<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notifiication;
use App\Models\Post;
use App\Models\User;
use App\Repositories\NotificationRepository;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $notificationRepository;

    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    public function index()
    {

        $user = auth()->user();

        if ($user) {
            $followedUserIds = $user->followees()->pluck('id');

            $followedUserIds->push($user->id);

            $followees = User::whereNotIn('id', $followedUserIds)
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $followees = null;
        }

        $posts = Post::orderBy('created_at', 'desc')
            ->with('comments.user')
            ->withCount('likers')
            ->get();

        if (auth()->check()) {
            $notifications= $this->notificationRepository->getNotifications();
            
        } else {
            $notifications = null;
        }
        return view('home.home', compact('posts', 'followees', 'notifications'));
    }


    public function search(Request $request)
    {
        try {
            $query = $request->input('query');
            $users = User::where('firstName', 'LIKE', '%' . $query . '%')
            ->orWhere('lastName', 'LIKE', '%' . $query . '%')
            ->get();
            return response()->json(['users' => $users]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e]);
        }
    }


    public function readNotific($notifid)
    {
        $read = $this->notificationRepository->readNotification($notifid);
        
        return redirect()->route('homepage');
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
