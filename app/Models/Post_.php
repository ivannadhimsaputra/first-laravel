<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Akagami No Kaizoku",
            "slug" => "judul-post-pertama",
            "author" => "Akagami No Shanks",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat blanditiis ad animi et libero excepturi voluptatibus possimus provident in ut quod ex voluptatem, cumque illum, doloribus autem quisquam hic, id recusandae expedita nisi fugit. Rem totam, asperiores perspiciatis distinctio nesciunt reprehenderit minus placeat corporis ex non consequuntur cumque sit esse veritatis quisquam necessitatibus voluptatem ducimus modi mollitia in quis! Cum illum incidunt odit omnis, velit aspernatur voluptatum ullam, corporis voluptatem ducimus asperiores perferendis odio a eos. Delectus quibusdam fugiat exercitationem!"
        ],
        [
            "title" => "Shirohike No Kaizoku",
            "slug" => "judul-artikel-kedua",
            "author" => "Akagami No Ace",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestiae laborum consectetur deserunt quisquam, similique quae unde fugiat nostrum eligendi deleniti velit commodi sapiente quod repudiandae! Non corrupti necessitatibus minus deserunt. Excepturi itaque nihil corporis quibusdam. Facilis quis fugiat fugit quae, libero quibusdam iusto aut, modi laborum labore ratione, provident officia eaque vero. Quos error unde porro quod expedita at obcaecati voluptatum rem quibusdam hic maiores nesciunt accusantium, ad, quaerat ut quidem facilis possimus, officia veniam molestiae alias. Alias, architecto fugiat officia doloribus praesentium nesciunt. Quas atque alias fugit modi praesentium animi ad voluptatem quae ducimus, voluptatibus repudiandae ex officiis?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
