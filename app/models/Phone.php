<?php

class Phone extends \Eloquent {
    protected $table = 'phone';
	protected $fillable = [];

    public function user(){
        return $this->hasOne('User');
    }

}

