<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
/*
    User::truncate();
    Category::truncate();
    Post::truncate();
*/
        $user=User::factory()->create([
            'name' => 'john Doe'
        ]);

    Post::factory(5)->create([
        'user_id'=>$user->id    
    ]);

/*

     $user = User::factory()->create();
  
    $personal = Category::create([
        'name'=>'Personal',
        'slug'=>'personal'
    ]);

    $family = Category::create([
        'name'=>'Family',
        'slug'=>'family'
    ]);

    $work = Category::create([
        'name'=>'Work',
        'slug'=>'work'
    ]);

    Post::create([
        'user_id' => $user->id,
        'category_id' =>$personal->id, 
        'title' => 'My First Post',
        'slug' => 'my-first-slug',
         'excerpt' => '<p>Lorem Ipsum Dolaar Dolar Dolar</p>',
         'body'=>    '<p>Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar</p>'

    ]);

    Post::create([
        'user_id' => $user->id,
        'category_id' =>$family->id, 
        'title' => 'My Second Post',
        'slug' => 'my-second-slug',
         'excerpt' => '<p>Lorem Ipsum Dolaar Dolar Dolar</p>',
         'body'=>    '<p>Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar</p>'

    ]);

    Post::create([
        'user_id' => $user->id,
        'category_id' =>$work->id, 
        'title' => 'My Third Post',
        'slug' => 'my-third-slug',
         'excerpt' => '<p>Lorem Ipsum Dolaar Dolar Dolar</p>',
         'body'=>    '<p>Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar Lorem Ipsum Dolaar Dolar Dolar</p>'

    ]);
*/
}   }
