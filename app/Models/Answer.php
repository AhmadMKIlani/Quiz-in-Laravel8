<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = [
        'answer',
        'correct',
        'question_id'
    ];
    public function question(){
        return $this->belongsTo(Question::class);
    }
    use HasFactory;
}
