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
}
