<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = 'blog_tags';
	public $timestamps = false;
    
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'blog_post_tag');
    }

}