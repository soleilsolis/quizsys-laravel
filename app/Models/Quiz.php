<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $with = ['user'];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
