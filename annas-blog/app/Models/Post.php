<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeSearchAllPosts($query, array $filters){
        // if($filters['search'] ?? false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }


        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
             });
         });

         $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category' , function($query) use ($category) {
                 $query->where('slug', $category);
             });
         });

         $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('user' , function($query) use ($author) {
                 $query->where('username', $author);
             });
         });

    }

    public function getRouteKeyName(){
        return 'slug';
    }


}
