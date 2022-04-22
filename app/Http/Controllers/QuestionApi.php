<?php

namespace App\Http\Controllers;

use App\Models\QuestionAdd;
use Illuminate\Http\Request;

class QuestionApi extends Controller
{
    public function index()
    {
        $question=QuestionAdd::all();
        return view("qqq",compact('question'));
    }

}
