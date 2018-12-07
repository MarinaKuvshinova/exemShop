<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table){
            $table->increments('id');
            $table->integer('itemId')->unsigned();
            $table->foreign('itemId')->references('id')->on('items')->onDelete('cascade');
            $table->string('itemImagePath', 255);

        });

//        // Insert some stuff
//        DB::table('images')->insert(
//            array(
//                ['itemId' => 1, 'itemImagePath' => 'product_1.jpg'],
//                ['itemId' => 1, 'itemImagePath' => 'product_4.jpg'],
//                ['itemId' => 2, 'itemImagePath' => 'product_2.jpg'],
//                ['itemId' => 2, 'itemImagePath' => 'product_3.jpg'],
//            )
//        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
