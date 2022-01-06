<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = [
        'text',
        'points',
        'exam_id'
    ];
    
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
    public function answer(){
        return $this->hasMany(Answer::class);
    }
   
    use HasFactory;
}
