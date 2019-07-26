<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const IS_ADMIN = 1;
    const IS_NORMAL = 0;

    const IS_BUNNED = 1;
    const IS_ACTIVE = 0;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function commets()
    {
        return $this->hasMany(Comment::class);
    }
    public static function add ($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->password = bcrypt($fields['password']);
        $user ->save();
        return $user;
    }
    public function edit($fields)
    {
        $this->fill($fields);
        $this->password = bcrypt($fields['password']);
        $this ->save();
    }
    public function remove()
    {
        $this->delete();
    }

    public function uploadAvatar($image)
    {
        if ($image == null) {return;}
        Storage::delete('uploads/' . $this->image);
        $filename = srt_random(10).'.'.$image->extension();
        $image->saveAs('uploads', $filename);
        $this->image = $filename;
        $this ->save();
    }

    public function getAvatar()
    {
        if($this->image == null)
        {return '/img/no-avatar.png';}
        return '/uploads/' . $this->image;
    }

     public function makeAdmin()
     {
         $this->is_admin = User::IS_ADMIN;
         $this->save();
     }

    public function makeNormal()
    {
        $this->is_admin = User::IS_NORMAL;
        $this->save();
    }

    public function toggleAdmin($var)
    {
        if($var == null)
        {return $this->makeNormal();}
        else
        {return $this->makeAdmin();}
    }



    public function ban()
    {
        $this->is_admin = User::IS_BUNNED;
        $this->save();
    }

    public function unbun()
    {
        $this->is_admin = User::IS_ACTIVE;
        $this->save();
    }

    public function toggleBun($var)
    {
        if($var == null)
        {
            return $this->unbun();
        }
        else
        {
            return $this->ban();
         }
    }
}
