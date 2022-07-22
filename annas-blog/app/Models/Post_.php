<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Pertama",
            "slug" => "judul-pertama",
            "author" => "Annas Ismail",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, tempore ad labore, aperiam placeat eligendi doloremque illum dolorum eveniet hic debitis? Magni vitae veritatis qui, nostrum praesentium amet non sunt cupiditate officia voluptate pariatur, asperiores quae distinctio possimus voluptas quas aut obcaecati at placeat veniam mollitia adipisci? Culpa minus beatae necessitatibus temporibus reprehenderit facilis consequuntur modi ad porro nam eligendi perspiciatis vel rem exercitationem in, nesciunt doloremque saepe suscipit commodi quisquam inventore hic incidunt corporis. Iusto voluptate voluptatum eaque earum dolor voluptas provident et repellat eius quaerat ipsam porro magni, accusamus officia? Possimus voluptatibus iure laborum. Architecto, neque? Reprehenderit, debitis?"
        ],
        [
            "title" => "Kedua",
            "slug" => "judul-kedua",
            "author" => "Andy",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis numquam sapiente facilis similique culpa provident, sit eius consequuntur, minus saepe accusamus! A voluptatem sit perferendis libero sequi laboriosam quod esse dolorem neque dolorum, expedita nostrum laudantium iure, ducimus necessitatibus! Nobis veritatis repellat, corporis temporibus veniam ipsa enim. Dolorum nobis corrupti incidunt, a enim totam nostrum labore doloribus esse, unde, dolorem eos cupiditate sequi atque expedita. Nobis laboriosam cupiditate amet ratione."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){

        $all_posts = static::all();

        // $postMeans = [];
        // foreach($all_posts as $post){
            
        //     if($post['slug'] === $slug){
        //         $postMeans = $post;
        //     }
        // }
        // return $postMeans;

        return $all_posts->firstWhere('slug', $slug);
    }
}
