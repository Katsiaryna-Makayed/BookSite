<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('products',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("year");
            $table->integer("authors_id")->references("id")->on("authors")->nullable();
            $table->integer("categories_id")->references("id")->on("categories")->nullable();
            $table->text("description")->nullable();
            $table->string("photo")->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->decimal("price", 15, 2)->nullable();
            $table->string("quantity");
            $table->string("sold");
            $table->enum("sale", ["no_sale", "sale_5", "sale_10", "sale_15", ])->nullable();
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
        Schema::drop('products');
    }

}