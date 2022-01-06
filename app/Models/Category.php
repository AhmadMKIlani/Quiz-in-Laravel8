<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name',
        'image',
    ];
    public function exam(){
        return $this->hasMany(Exam::class);
    }
    use HasFactory;
}
