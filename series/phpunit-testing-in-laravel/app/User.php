<?php

namespace app;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function leaveTeam()
    {
        return $this->team()->dissociate()->save();
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function like(Post $post)
    {
        $like = new Like();

        $like->likeable()->associate($post);

        $like->user()->associate($this);

        return $like->save();
    }

    public function unlike(Post $post)
    {
        return Like::where('likeable_id', $post->id)
            ->where('likeable_type', Post::class)
            ->where('user_id', $this->id)
            ->delete();
    }
}
