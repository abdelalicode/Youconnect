<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Notifiication;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        $user_id = auth()->user()->id;

        // $post->user_id = $user_id;
        // $post->save();
        $post = Post::create(array_merge($validatedData, ['user_id' => $user_id]));

        return redirect()->route('homepage');
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->delete();
        return redirect()->route('homepage');
    }


    public function follows(Request $request)
    {
        $validated = $request->validate([
            'followee_id' => 'required'
        ]);

        $followerId = auth()->id();

        $user = User::find($followerId);

        if ($user) {
            $user->followees()->toggle($validated['followee_id']);

            Notifiication::create([
                'user_id' => auth()->user()->id,
                'type' => 'follow',
            ]);
        }


        return redirect()->route('homepage');
    }
}
