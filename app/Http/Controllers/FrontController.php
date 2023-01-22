<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Post;
use App\Models\Tag;
use Faker\Provider\Lorem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

        $posts = Post::where('status', 2)->latest()->get();



        return view('pages.home', ['posts' => $posts]);
    }
    public function tramites()
    {
        return view('pages.tramites-service');
    }
    public function transparencia()
    {
        return view('pages.transparencia');
    }
    public function prensa()
    {
        return view('pages.sala-prensa');
    }
    public function show_articulo(Post $post)
    {

        $similares = Post::where('category_id', $post->category_id)->where('status', 2)->where('id', '!=', $post->id)->take(5)->get();

        return view('posts.show', ['post' => $post, 'similares' => $similares]);
    }

    public function category(Category $category)
    {


        $posts = Post::where('status', 2)->where('category_id', $category->id)->latest('id')->paginate(6);

        return view('posts.categories', ['posts' => $posts, 'category' => $category]);
    }

    public function tag(Tag $tag)
    {


        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(6);

        return view('posts.tags', ['posts' => $posts, 'tag' => $tag]);

        return $tag;
    }

    public function slider()
    {
        $posts = Post::where('status', 2)->latest()->get();

        return view('components.slider-home', ['post' => $posts]);
    }
}
