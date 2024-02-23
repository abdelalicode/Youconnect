<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Notifiication;
use Illuminate\Http\Request;

class CommentController extends Controller
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
        $validatedcomment = $request->validate([
            'content' => 'required',
            'post_id' => 'required'
        ]);

        $validatedcomment['user_id'] = auth()->user()->id;

        $comment = Comment::create($validatedcomment);
        

        Notifiication::create([
            'user_id' => auth()->user()->id,
            'type' => 'comment',
            'post_id' => $validatedcomment['post_id'],
        ]);
        return redirect()->route('homepage');
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
    public function destroy(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->delete();
        return redirect()->route('homepage');
    }

    
}
