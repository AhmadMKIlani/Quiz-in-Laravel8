<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $fillable = [
        'result',
        'user_answer',
        'exam_id',
        'user_id'
    ];
    public function exam(){
        return $this->belogsTo(Exam::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function userAnswer(){
        return $this->hasMany(UserAnswer::class);
    }
    use HasFactory;
}
