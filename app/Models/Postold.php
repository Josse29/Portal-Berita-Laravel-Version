<?php
 
namespace App\Models;
 
class Post
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Berita",
            "slug" => "judul-1",
            "eksportir" => "Josse Surya Pinem",
            "body" => "lorem"
        ],
        [
            "title" => "Judul Berita-2",
            "slug" => "judul-2",
            "eksportir" => "Sandhika",
            "body" => "lorem"
        ],
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $post->firstWhere('slug',$slug); 
    }
}