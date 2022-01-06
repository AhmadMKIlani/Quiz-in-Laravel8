<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $fillable = [
        'user_answer'
    ];
    public function result(){
        return $this->belongsTo(Result::class);
    }
    use HasFactory;
}
