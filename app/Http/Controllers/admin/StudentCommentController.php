<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentCommentController extends Controller
{
    public function index()
    {
        return view('admin.student_comments');
    }
}
