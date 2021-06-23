<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(Post $post)
   {
      return $post->get();
   }
   
   public function home()
   {
      return view('home');
      
   }
   
   public function menu(){
      return view('menu');
   }
   
   public function m(){
      return view('m');
   }
   
   public function blog(Soccer $soccer)
   {
      return $post->get();
   }
   
}
