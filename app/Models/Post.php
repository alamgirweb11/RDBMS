<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'country_id', 'title', 'slug', 'description', 'thumbnail_img', 'status'];

    public function category(){
           return $this->belongsTo(Category::class);
    }
}
