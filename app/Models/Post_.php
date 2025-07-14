<?php

namespace App\Models;


class Post
{
    static $blog_posts = [
        [
            "title" => "Title Post 1",
            "slug" => "title-post-1",
            "author" => "Michelle",
            "body" => "
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni totam exercitationem doloremque debitis sunt praesentium. Exercitationem culpa, laboriosam eum consequuntur quasi voluptates nisi nulla iure asperiores, doloremque expedita praesentium rem tempore architecto fugiat quaerat? Explicabo tempore voluptatibus nam nisi laborum illum recusandae sed ipsum officiis voluptatum error deserunt obcaecati saepe aperiam, eius atque sit dignissimos consequuntur ab molestiae quibusdam minima asperiores necessitatibus nulla! Officiis laborum reiciendis facilis perferendis doloribus id architecto error quibusdam debitis praesentium! Rerum ratione adipisci laboriosam delectus."
        ],
        [
            "title" => "Title Post 2",
            "slug" => "title-post-2",
            "author" => "Putri",
            "body" => "
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni totam exercitationem doloremque debitis sunt praesentium. Exercitationem culpa, laboriosam eum consequuntur quasi voluptates nisi nulla iure asperiores, doloremque expedita praesentium rem tempore architecto fugiat quaerat? Explicabo tempore voluptatibus nam nisi laborum illum recusandae sed ipsum officiis voluptatum error deserunt obcaecati saepe aperiam, eius atque sit dignissimos consequuntur ab molestiae quibusdam minima asperiores necessitatibus nulla! Officiis laborum reiciendis facilis perferendis doloribus id architecto error quibusdam debitis praesentium! Rerum ratione adipisci laboriosam delectus."
        ],
        [
            "title" => "Title Post 3",
            "slug" => "title-post-3",
            "author" => "Ahmed",
            "body" => "
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni totam exercitationem doloremque debitis sunt praesentium. Exercitationem culpa, laboriosam eum consequuntur quasi voluptates nisi nulla iure asperiores, doloremque expedita praesentium rem tempore architecto fugiat quaerat? Explicabo tempore voluptatibus nam nisi laborum illum recusandae sed ipsum officiis voluptatum error deserunt obcaecati saepe aperiam, eius atque sit dignissimos consequuntur ab molestiae quibusdam minima asperiores necessitatibus nulla! Officiis laborum reiciendis facilis perferendis doloribus id architecto error quibusdam debitis praesentium! Rerum ratione adipisci laboriosam delectus."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
};
