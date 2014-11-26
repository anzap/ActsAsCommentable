<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('comments', function($table)
        {
            $table->increments('id');
            $table->morphs('commentable');
            $table->string('title')->nullable();
            $table->text('body');
            $table->string('subject')->nullable();
            $table->integer('user_id');
            // $table->integer('parent_id');

            $table->timestamps();

            $table->index('user_id');
            $table->index('commentable_id');
            $table->index('commentable_type');

            if (Schema::hasTable('users'))
            {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('comments');
	}

}
