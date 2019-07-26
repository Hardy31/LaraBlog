<?php


namespace App\Services;



use Illuminate\Support\Facades\DB;


class PostService
{
    public function getAll()
    {
        $posts = DB::table("posts")->select("*")->get();

        return $posts;
    }







}
