<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

use function PHPSTORM_META\map;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

return view('posts', [
  'posts' => Post::latest()->with('category','author')->get()  
]);

//ddd($posts[0]->title);
 

/* 
$document= YamlFrontMatter::parseFile(
    resource_path ("posts/my-fourth-post.html"));

    ddd($document->date);
    return view('posts', [
        'posts' => Post::all()
    ]);

*/

});

Route::get('posts/{post}', function (Post $post){
  // Find a post by its slug and pass it to a view  

  return view('post',[ 
      'post'=> $post
  ]);


    

  /*  

    if (! file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
        return redirect('/');
    }

    $post = cache()->remember("posts.{$slug}", 1200 ,fn()=>file_get_contents($path));

   

    return view('post',[ 'post' => $post ]);
  */
});

Route::get('categories/{category:slug}',function(Category $category){
  return view('post',[ 
    'post'=> $category->posts
]);


});
Route::get('authors/{author}',function(User $author){
  return view('post',[ 
    'post'=> $author->posts
]);
});