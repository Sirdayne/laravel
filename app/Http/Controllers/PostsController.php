<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        //$posts = Post::all();
        $posts = Post::all();
        /*
        $posts = Post::latest()->filter(request(['month','year']))->get();

         ARCHIVES
        if ($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year','month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
        */

        return view('posts.index', compact('posts'));

    }

    /*
    public function show($id){

        $post = Post::find($id);

        return view('posts.show', compact('post'));

    }
    */

    public function show(Post $post){

        return view('posts.show', compact('post'));

    }

    public function create(){

        return view('posts.create');

    }

    public function store(){
        /*
        $post = new Post;

        $post->title = request('title');
        $post->body = request('body');

        $post->save();
        */
        /*
        Post::create([

            'title' => request('title'),
            'body' => request('body')

        ]);
        */
        $this->validate(request(),[
            'title' => 'required|min:3|max:20',
            'description' => 'required|max:130',
            'body' => 'required'
        ]);

        //see in User Model - publish function
        //auth()->user()->publish( new Post( request(['title', 'body']) ) );

        Post::create([
            'title' => request('title'),
            'description' => request('description'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        /* Method upper can be swapped with this, but delete publish func in User Model
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        */

        return redirect('/posts');
    }
}
