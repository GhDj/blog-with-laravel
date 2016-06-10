<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $table = 'blog_config';
	public $timestamps = true;
	protected $fillable = array('blog_title', 'blog_logo', 'blog_header_link', 'blog_description', 'blog_maintenance_status');

}