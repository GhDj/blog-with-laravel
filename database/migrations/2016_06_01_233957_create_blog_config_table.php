<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogConfigTable extends Migration {

	public function up()
	{
		Schema::create('blog_config', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('blog_title', 255)->nullable();
			$table->string('blog_logo', 255)->nullable();
			$table->string('blog_header_link', 255)->nullable();
			$table->string('blog_description', 255);
			$table->boolean('blog_maintenance_status')->nullable()->default(false);
		});
	}

	public function down()
	{
		Schema::drop('blog_config');
	}
}