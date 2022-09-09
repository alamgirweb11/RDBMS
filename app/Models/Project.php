<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function environments(){
        return $this->hasMany(Environment::class);
    }

    public function developments(){
           return $this->hasManyThrough(Development::class, Environment::class);
    }
}
