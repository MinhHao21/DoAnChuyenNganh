<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function ajaxcomment(Request $request)
    {
        $data = DB::table('comments')->where('postId',$request->slug)->orderBy('id', 'desc')->take(5)->get();
        return $data;
    }
    public function savecomment(Request $request)
    {
       
        
        $comment = new Comment();
        $comment->parentId = 1;
        $comment->content = strip_tags(html_entity_decode($request->content));
        $comment->userId = strip_tags(html_entity_decode($request->userId));
        $comment->postId = strip_tags(html_entity_decode($request->postId));
        $comment->save();
        return 'thành công';
    }
    public function updatecomment(Request $request)
    {
        $comment = Comment::where('id', $request->id)->first();
        $comment->content = $request->data['content'];
        $comment->save();
        return 'thành công';
    }
    public function deletecomment(Request $request)
    {
        Comment::destroy($request->id);
        return 'thành công';
    }
}
