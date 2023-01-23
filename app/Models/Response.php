<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
