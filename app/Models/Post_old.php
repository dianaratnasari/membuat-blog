<?php

namespace App\Models;



class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Diana Ratna Sari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aut totam officiis perferendis quas tempora fuga unde aspernatur? Ad autem excepturi, eligendi sint illum architecto delectus totam optio soluta eos dolores. Optio excepturi nemo labore commodi odio. Sunt ducimus excepturi perspiciatis eius deleniti? Possimus dolorum placeat veritatis cupiditate eaque ab animi nobis quam eligendi iusto illo alias, nisi nemo nihil, minus quidem repellat? Eius laudantium repellat enim illo cum consequuntur rerum id. Unde, sunt hic exercitationem enim ut quas cumque!"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Nadia Asma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, aliquam. Eum itaque quae expedita id corporis atque eligendi voluptatem fugit vel ea! Odio corporis nam rem ea molestias a laborum! Quidem aspernatur eius doloremque consectetur placeat obcaecati explicabo vero quibusdam sit laudantium cupiditate facere accusantium laborum fugit, ducimus eligendi praesentium nisi impedit odio, incidunt esse? Minus nesciunt ipsam nemo! Optio, voluptate aperiam. Incidunt vitae cumque repellat accusantium, quo laborum quia reiciendis magni totam? Nostrum autem quisquam temporibus eum perspiciatis unde aperiam error velit rem, voluptate numquam cupiditate deleniti magnam minima voluptatibus impedit doloribus omnis quaerat. Voluptatem esse recusandae beatae error!"
        ]
    ];

    public static function all()
    {
        return  collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
