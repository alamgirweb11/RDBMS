<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Mechanic;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home(){
         return view('home');
     }

     public function users(){
        // eager loading
        $users = User::with(['profile', 'roles' => 
        function($q){
            $q->wherePivot('expired_at', '>', now());
     }
     ])->get();
          return view('pages.users', compact('users'));
     }

     public function categories(){
         // retrieved data with eager loading
         $categories = Category::with(['posts'], function($q){
            $q->where('status', '=', 'published');
         })->get();
         return view('pages.categories', compact('categories'));
     }

     public function mechanics(){
           $mechanics = Mechanic::with(['car', 'owner'])->get();
           return $mechanics;
        //    return view('pages.mechanics', compact('mechanics'));
     }
}
