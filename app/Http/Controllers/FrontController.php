<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Post;
use App\Models\Tag;
use Faker\Provider\Lorem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Genert\BBCode\BBCode;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function index()
    {

        $posts = Post::where('status', 2)->latest()->paginate(10);
        /*         $slider = Post::where('status', 2)->where('category', 'Articulos')->latest()->paginate(10);
 */

        $category = Category::select('name')->get();
        $slider = Post::where('status', 2)->latest()->with('category')->select('name')->paginate(10);




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
        $this->authorize('published', $post);

        return view('posts.show', ['post' => $post, 'similares' => $similares]);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $posts =   Post::where('status', 2)->where('name', 'LIKE', "%{$search}%")->orwhere('body', 'LIKE', "%{$search}%")->orwhere('extract', 'LIKE', "%{$search}%")->latest()->paginate(2);

        return view('posts.search', ['posts' => $posts, 'search' => $search]);
    }

    public function tag(Tag $tag)
    {


        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(6);

        return view('posts.tags', ['posts' => $posts, 'tag' => $tag]);

        return $tag;
    }

    public function slider()
    {
        $posts = Post::where('status', 2)->where('category_id')->latest()->get();

        return view('components.slider-home');
    }
}
