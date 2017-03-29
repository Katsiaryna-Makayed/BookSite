<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateGoodsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('goods', function (Blueprint $table) {
			$table->string('name');
			$table->string('author');
			$table->text('description');
			$table->string('url');
			$table->string('picture');
			$table->string('price');
			$table->integer('year');
			$table->enum('vip', array('0','1'))->default('0');
			$table->enum('showhide', array('show','hide'))->default('show');
			$table->integer('cat_id');
			$table->integer('user_id');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }

}