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
        Model::unguard();
        Schema::create('goods',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->integer("authors_id")->references("id")->on("authors")->nullable();
            $table->text("description")->nullable();
            $table->string("url")->nullable();
            $table->string("picture")->nullable();
            $table->string("price")->nullable();
            $table->string("year")->nullable();
            $table->enum("vip", ["0", "1"])->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->integer("categories_id")->references("id")->on("categories")->nullable();
            $table->integer("user_id")->references("id")->on("user")->nullable();
            $table->timestamps();
            $table->softDeletes();
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