<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentComment;

class StudentCommentController extends Controller
{
    public function index()
    {
        $comments = StudentComment::latest()->paginate(10);
        return view('admin.student_comments', compact('comments'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'student_name' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        $comment = new StudentComment();
        $comment->student_name = $request->student_name;
        $comment->content = $request->content;
        $comment->avatar_url = $request->avatar_url;
        // $comment->created_by = auth()->user()->id;
        $comment->created_at = now();
        $comment->save();

        return redirect()->route('admin.student_comment')->with('success', 'Comment created successfully');
    } 

    public function destroy($id)
    {
        $comment = StudentComment::find($id);
        $comment->delete();
        return redirect()->route('admin.student_comment')->with('success', 'Comment deleted successfully');
    }
}
