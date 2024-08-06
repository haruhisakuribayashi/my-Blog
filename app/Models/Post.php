<?php

namespace App\Models;



class Post 
{
   private static $blog_post = [
        [
            'judul' => "judul pertama",
            'slug' => "judul-post-pertama",
            'author' => 'Rizal Jalaludin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam assumenda repudiandae sequi perferendis quibusdam facilis tenetur excepturi, consectetur soluta quis corporis aliquam praesentium molestiae corrupti temporibus eligendi. Cum perspiciatis, ex impedit nihil nostrum natus, at animi iusto earum, ipsa temporibus ut. Deleniti minima vero eum error ea, rem fugit nesciunt sunt mollitia porro vitae nulla tempora libero quibusdam voluptatibus fugiat minus temporibus! Aliquam quidem adipisci quisquam mollitia illum dolor eaque culpa officiis aperiam repellat quae eius, aspernatur temporibus ab ad magni animi vero nam nemo ut hic enim voluptatem veritatis?'
        ],
        [
            'judul' => "judul kedua",
            'slug' => "judul-post-kedua",
            'author' => 'zoro',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam molestiae fugiat quos ab nesciunt porro, pariatur officiis, aperiam ratione, quasi voluptatum optio asperiores dolorem beatae id quidem quo. Iusto, aliquid facere omnis dolore id enim ad fugiat animi? Labore nulla quia voluptatem officiis provident animi reiciendis! Minima sint praesentium repellat debitis magnam totam hic cumque voluptatum quis recusandae. Beatae in rerum minus maiores, tempore architecto accusamus fugiat itaque eligendi sed eius deserunt fugit aliquam. Magni deserunt tenetur asperiores saepe unde.'
        ],
    
        ];

    public static function all ()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $new_post = [];
        // foreach ($posts as $post){
        //     if($post["slug"]=== $slug) {
        //         $new_post = $post;
        //     }
        // }
        //cek

        return $posts->firstWhere('slug', $slug);
    }
    
}
