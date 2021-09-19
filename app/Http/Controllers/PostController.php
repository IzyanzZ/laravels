<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request("category")) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            'active' => 'posts',
            "p" => Post::latest()->filter(request(["search", "category", "author"]))->paginate(7)
        ]);
    }

    public function show(Post $post)
    {
        return view('show', [
            "title" => "Single Posts",
            "post" => $post,
            "active" => 'posts',
        ]);
    }
}
