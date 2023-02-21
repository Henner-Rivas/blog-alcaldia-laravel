<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Document;
use App\Models\Post;
use App\Models\Tag;
use Faker\Provider\Lorem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function index()
    {
        $sliders = Post::where('status', 2)->where('category_id', '=', 2)->latest()->paginate(6);

        $posts = Post::where('status', 2)->where('category_id', '=', 1)->latest()->paginate(10);
        return view('pages.home', ['posts' => $posts, 'postsSlider' => $sliders]);
    }
    public function show_planes(Post $post)
    {
        return view('pages.show-planes', ['post' => $post]);
    }
    public function show_programa(Post $post)
    {
        return view('pages.show-programa', ['post' => $post]);
    }

    public function storeComment(Request $request, Post $post)
    {

        $request->validate([
            'description' => 'required',
        ], [
            'name.required' => 'Este campo es requerido',
        ]);
        $comentario = new Comment();
        $comentario->description = $request->description;
        $comentario->parent_id = $request->parent_id;
        $comentario->role = $request->role;


        $comentario->user_id = \Auth()->id();

        $post->comments()->save($comentario);

        return redirect()->back()->with('info', 'comentario recibido con exito');
    }




    public function planes()
    {

        $posts =   Post::where('category_id', '=', 3)->latest()->paginate();
        return view('pages.nuestros-planes', ['posts' => $posts]);
    }
    public function programas()
    {

        $posts =   Post::where('category_id', '=', 4)->latest()->paginate();
        return view('pages.programas', ['posts' => $posts]);
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

        $posts =   Post::where('status', 2)->where('name', 'LIKE', "%{$search}%")->orwhere('body', 'LIKE', "%{$search}%")->orwhere('extract', 'LIKE', "%{$search}%")->latest()->paginate(5);

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
        $posts = Post::where('status', 2)->where('category_id', '=', 2)->latest()->paginate(6);


        return view('pages.home', ['postsSlider', $posts]);
    }




    public function documents()
    {

        $archivos =   Document::latest()->paginate();

        return view('pages.documents', ['archivos' => $archivos]);
    }
    public function programs()
    {
        return view('pages.documents');
    }
}
