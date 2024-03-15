<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends odel
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}