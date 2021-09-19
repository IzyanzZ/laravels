<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post-1",
            "slug" => "post-satu",
            "author" => "Apin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ducimus saepe eos, ab quos
            eligendi placeat cupiditate veritatis voluptate quod laborum mollitia perspiciatis rerum vero reiciendis,
            porro ea. Est quo officia dolorem accusantium maxime quos facere perspiciatis commodi voluptatum, excepturi
            corrupti rem dolor debitis ratione mollitia sint fugit dignissimos reprehenderit quam fuga ab dolore
            magnam dolores quis. Illo tempore iusto dolorum mollitia? Inventore, doloremque ipsa similique minima natus
            quod, animi reprehenderit, temporibus laudantium expedita repudiandae dolores facilis ut? Ipsam corrupti
            tenetur possimus iusto iure impedit et ea quis voluptates, soluta maxime mollitia id dolorum odit placeat
            enim unde, ut dolores nemo tempore eveniet. Hic quaerat natus culpa architecto suscipit non ducimus provident
            voluptas, illum repellendus unde voluptates doloremque corrupti iusto!"
        ],
        [
            "title" => "Post-2",
            "slug" => "post-dua",
            "author" => "Akhi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ducimus saepe eos, ab quos
            eligendi placeat cupiditate veritatis voluptate quod laborum mollitia perspiciatis rerum vero reiciendis,
            porro ea. Est quo officia dolorem accusantium maxime quos facere perspiciatis commodi voluptatum, excepturi
            corrupti rem dolor debitis ratione mollitia sint fugit dignissimos reprehenderit quam fuga ab dolore
            magnam dolores quis. Illo tempore iusto dolorum mollitia? Inventore, doloremque ipsa similique minima natus
            quod, animi reprehenderit, temporibus laudantium expedita repudiandae dolores facilis ut? Ipsam corrupti
            tenetur possimus iusto iure impedit et ea quis voluptates, soluta maxime mollitia id dolorum odit placeat
            enim unde, ut dolores nemo tempore eveniet. Hic quaerat natus culpa architecto suscipit non ducimus provident
            voluptas, illum repellendus unde voluptates doloremque corrupti iusto!"
        ],
        [
            "title" => "Post-3",
            "slug" => "post-tiga",
            "author" => "Unknown",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit ducimus saepe eos, ab quos
            eligendi placeat cupiditate veritatis voluptate quod laborum mollitia perspiciatis rerum vero reiciendis,
            porro ea. Est quo officia dolorem accusantium maxime quos facere perspiciatis commodi voluptatum, excepturi
            corrupti rem dolor debitis ratione mollitia sint fugit dignissimos reprehenderit quam fuga ab dolore
            magnam dolores quis. Illo tempore iusto dolorum mollitia? Inventore, doloremque ipsa similique minima natus
            quod, animi reprehenderit, temporibus laudantium expedita repudiandae dolores facilis ut? Ipsam corrupti
            tenetur possimus iusto iure impedit et ea quis voluptates, soluta maxime mollitia id dolorum odit placeat
            enim unde, ut dolores nemo tempore eveniet. Hic quaerat natus culpa architecto suscipit non ducimus provident
            voluptas, illum repellendus unde voluptates doloremque corrupti iusto!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere("slug", $slug);
    }
}
