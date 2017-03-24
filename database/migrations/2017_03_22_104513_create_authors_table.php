<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateAuthorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('authors',function(Blueprint $table){
            $table->increments("id");
            $table->string("fio");
            $table->text("description")->nullable();
            $table->string("photo")->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->enum("vip", ["0", "1"])->nullable();
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
        Schema::drop('authors');
    }

}