<?php

namespace App\Models;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = [];  
    
  
    public function category(){
        return $this->belongsTo(Category::class);
    } 
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    //protected $fillable = ['title','excerpt','body'];
}
