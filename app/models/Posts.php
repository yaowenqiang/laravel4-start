<?php

class Posts extends \Eloquent {
    //protected $fillable = [
        //'title','body','user_id'
    //];
    protected $guarded = [
        'user_id'
    ];
    /**
     * find all user's posts
     *
     * @return void
     * @author Steve Francia <steve.francia@gmail.com>
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}
