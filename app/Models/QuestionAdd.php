<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAdd extends Model
{
    use HasFactory;
    protected $table="question_adds";
    protected $fillable=["question","choice"];
}
