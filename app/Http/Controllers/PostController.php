<?php

namespace App\Http\Controllers;

use App\Category;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $posts;

    public function __construct(PostService $postService)
    {
        $this->posts = $postService;
        //dd($this->posts);
    }


    function index() {
        return view('welcome');
    }
    function admin() {
        return view('admin');
    }


    function posts() {

        $posts = new PostService();
        //dd($posts->getAll());
        return view('posts', ['posts' => $this->posts->getAll()]);


    }

    function creat() {
        return view('creat');
    }

    function store(Request $request) {

        $post = $request->all();
        $image = $request->file('image');
        $fileImage = $request->image->store('uploads');
        DB::table('posts')->insert(
            [
                'picture' => $fileImage,
                'title' => $post['title'],
                'content'  => $post['content'],
            ]
        );

        return redirect('/');
    }

    function post($id) {
        $post = DB::table("posts")->select("*")->where('id', $id)->first();
        return view('post', ['post' => $post]);
    }

    function edit($id) {
        $post = DB::table("posts")->select("*")->where('id', $id)->first();
        return view('edit', ['post' => $post]);
    }

    function update(Request $request, $id) {
        //удаляем старую картинку
        $post = DB::table("posts")->select("*")->where('id', $id)->first();
        Storage::delete($post->picture);
        $post = $request->all();
        $image = $request->file('image');
        $fileImage = $request->image->store('uploads');
        DB::table('post')
            ->where('id', $id)
            ->update([
                'picture' => $fileImage,
                'title' => $post['title'],
                'content'  => $post['content'],
            ]);
        return redirect('/posts');
    }

    function delit( $id) {
        //удаляем старую картинку
        $post = DB::table("posts")->select("*")->where('id', $id)->first();
        Storage::delete($post->picture);
        DB::table('posts')->where('id', $id)->delete();
        return redirect('/posts');
    }

    function home() {
        return view('home');
    }
}
