<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];

    //jika tabel di database berupa blog_posts maka perlu membuat:
    // protected $table = 'blog_posts';

    //jika table ada post_id maka peerlu membuat:
    // protected $primaryKey = 'post_id';

    // public static function all() {
    //     return [
    //         [
    //             'id' => 1,
    //             'slug' => 'judul-artikel-1',
    //             'title' => 'Judul Artikel 1',
    //             'author' => 'Gevan Lolyvich',
    //             'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea enim, ullam accusantium nostrum ab porro eum provident illo a asperiores officia inventore, ut ipsam quasi culpa soluta unde facilis corrupti.'
    //         ],
    //         [
    //             'id' => 2,
    //             'slug' => 'judul-artikel-2',
    //             'title' => 'Judul Artikel 2',
    //             'author' => 'Gevan Lolyvich',
    //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat error nulla itaque perferendis veniam, asperiores quisquam atque delectus id reiciendis explicabo eum doloribus aliquam? Ut voluptatem dignissimos magnam eveniet dolor.'
    //         ],
    //     ];
    // }

    // public static function find($slug): array //return array --- : array 
    // {
    //     // return Arr::first(static::all(), function ($post) use ($slug) { //callback
    //     //     return $post['slug'] == $slug;
    //     // });

    //     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug); //arrow function

    //     if (!$post) {
    //         abort(404);
    //     }

    //     return $post;
    // }
}