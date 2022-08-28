<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home(){
         return view('home');
     }

     public function users(){
        // eager loading
        $users = User::with(['profile'])->get();
          return view('pages.users', compact('users'));
     }

     public function categories(){
             // retrieved data with eager loading
             $categories = Category::with('posts',
              function($q){
                 $q->where('status', '=', 'published');
             })->get();

             return view('pages.categories', compact('categories'));
     }
}
