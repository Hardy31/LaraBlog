<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    function index() {
        return view('welcome');
    }

    function posts() {
        $posts = DB::table("post")->select("*")->get();
        return view('posts', ['posts' => $posts]);
    }

    function creat() {
        return view('creat');
    }

    function store(Request $request) {
        $post = $request->all();
        $image = $request->file('image');
        $fileImage = $request->image->store('uploads');
        DB::table('post')->insert(
            [
                'picture' => $fileImage,
                'title' => $post['title'],
                'content'  => $post['content'],
            ]
        );
        return redirect('/');
    }

    function post($id) {
        $post = DB::table("post")->select("*")->where('id', $id)->first();
        return view('post', ['post' => $post]);
    }

    function edit($id) {
        $post = DB::table("post")->select("*")->where('id', $id)->first();
        return view('edit', ['post' => $post]);
    }

    function update(Request $request, $id) {
        //удаляем старую картинку
        $post = DB::table("post")->select("*")->where('id', $id)->first();
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
        $post = DB::table("post")->select("*")->where('id', $id)->first();
        Storage::delete($post->picture);
        DB::table('post')->where('id', $id)->delete();
        return redirect('/posts');
    }

    function home() {
        return view('home');
    }
}
