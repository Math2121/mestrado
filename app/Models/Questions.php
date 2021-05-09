<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = [
        'question1',    'question2',    'question3',    'sub_question_3',    'question4',    'question5', 'question6',    'question7',    'question8', 'question9',    'question10',    'question11',    'question12'
    ];
}
