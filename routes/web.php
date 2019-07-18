<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/posts', function () {

        $posts = DB::table("post")->select("*")->get();

          //$myArrayPosts = $posts->all();
          //dd($myArrayPosts[3]);
          //$d = $myArrayPosts[3];
          //dd($d['title']);
    //dd($posts);
        //dd($myArrayPosts);
        return view('posts', ['posts' => $posts]);
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/creat', function () {
    return view('creat');
});
Route::post('/store', function (Request $request) {
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
});
