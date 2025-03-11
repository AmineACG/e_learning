<?php

// app/Models/Forum.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = ['cours_id'];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}