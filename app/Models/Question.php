<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'user_id',
        'question_name',
        'question_text',
        'question_alternative_01',
        'question_alternative_02',
        'question_alternative_03',
        'question_alternative_04',
        'question_alternative_correct',
    ];
    use HasFactory;
}
