<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone'];


    public function car(){
         return $this->hasOne(Car::class, 'mechanic_id', 'id');
    }

    public function owner(){
         return $this->hasManyThrough(Owner::class, Car::class);
    }
}
