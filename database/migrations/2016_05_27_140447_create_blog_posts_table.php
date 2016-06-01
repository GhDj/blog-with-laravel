<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogPostsTable extends Migration {

	public function up()
	{
		Schema::create('blog_posts', function(Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('category_id')->unsigned()->index();
			$table->string('title', 255);
			$table->string('slug', 255)->unique();
			$table->string('description', 255)->nullable();
			$table->text('summary');
			$table->text('content');
			$table->enum('status', array('draft', 'publish'))->index();
			$table->text('header_url');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('blog_posts');
	}
}