<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const IS_DISALLOW = 0;
    const IS_ALLOW = 1:
    public function post()
    {
        return $this->hasOne(Post::class);
    }
    public function author()
    {
        return $this->hasOne(User::class);
    }

    public function allow()
    {
        $this ->status = Comment::IS_ALLOW;
        $this->save();
    }

    public function disallow()
    {
        $this ->status = Comment::IS_DISALLOW;
        $this->save();
    }
    public function toggleStatus($var)
    {
        if($this->status = Comment::IS_DISALLOW)
        { return $this->allow();}
        else
        { return $this->disallow();}
    }
        public function remove()
        {
            $this ->delite();
        }

}
