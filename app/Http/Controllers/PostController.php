<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
         
        
        
        return view('posts', [
          'posts' => Post::latest()->filter(request(['search', 'category', 'author ']))->get(),
          'categories' => Category::all(),
          'currentCategory' => Category::firstwhere('slug', request('category'))
        ]);
    }

    public  function show(Post $post)
    {
        return view('post',[ 
            'post'=> $post
        ]);
    }

   
    /*
        if (request('search')){
          $posts
          ->where('title','like','%'. request('search').'%')
          ->orWhere('body','like','%'. request('search').'%')
          ;
        }
        
        return $posts->get();

        */
    
}
