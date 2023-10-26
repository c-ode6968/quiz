<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $primarikey = 'id';
    protected $fillable = ['title', 'subject', 'question', 'options', 'correct_option'];
    protected $casts = ['options' => 'array'];
}
