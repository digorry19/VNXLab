<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Comment;

class ApiCommentController extends Controller
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
    public function store(Request $request , String $id)
    {

        $product  = Product::query()->findOrFail($id);

       

        $comment = Comment::create([
            'comment_text' =>$request->input('comment_text') ,
            'rating' =>$request->input('rating') ,
            'product_id' => $product->id,
            'user_id' =>$request->input('user_id') ,
        ]);

        return response()->json([
            'message' => 'Comment Success',
            'comment' => $comment,
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::query()->findOrFail($id);
        $comment = $product->comment;
      
        return response()->json([
            'data' => CommentResource::collection($comment),
        ],200);
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
        $comment = Comment::query()->findOrFail($id);

        $comment->delete();
        return response()->json([
            'message' => 'Delete Success comment',
        ],200);

    }
}
