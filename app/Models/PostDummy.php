<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Rangga Dwi Cahya",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, magnam expedita. Quia iusto possimus accusantium dolore, sapiente placeat animi. Veniam debitis quasi necessitatibus omnis magni culpa laborum, magnam dolor nulla, corrupti dignissimos repellat similique rem sed commodi voluptatum ipsum molestias doloremque. Quas earum voluptates ratione! Ducimus autem neque nisi fuga dicta suscipit veritatis numquam soluta culpa excepturi optio dolor rem, voluptas distinctio. Placeat, voluptatum cum quis reiciendis delectus saepe? Excepturi nisi repellat ut veniam? Odio dolore fugiat doloremque suscipit praesentium?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Erii",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum magnam velit sunt aliquam et iure deleniti excepturi dignissimos ab facere porro minus, reiciendis ut rem corporis explicabo. Voluptas nesciunt iste nobis, optio dicta quas reprehenderit magnam tempora rem suscipit consequatur quasi tempore consectetur voluptate praesentium recusandae mollitia veritatis animi cumque molestiae pariatur veniam nemo enim! Commodi beatae corporis ea fugiat iure amet cum quis? Eum velit assumenda, placeat vero quia sed ipsam rem earum. Laborum, provident, esse exercitationem repellendus ex vero similique quae nulla dignissimos porro nisi. Magnam recusandae modi repudiandae illo aliquam, pariatur architecto officiis. Laudantium, numquam vitae."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
