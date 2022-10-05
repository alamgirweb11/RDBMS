<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'slug', 'source_url', 'video', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
     }
     
}
