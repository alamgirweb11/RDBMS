<?php

namespace App\Http\Controllers;

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
}
