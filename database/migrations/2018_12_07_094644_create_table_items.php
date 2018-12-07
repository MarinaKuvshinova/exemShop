<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table){
            $table->increments('id');
            $table->string('itemTitle', 100);
            $table->integer('categoryId')->unsigned();
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');
            $table->string('itemText', 255);
            $table->double('itemPrice', 8, 2);
            $table->integer('itemStars');
            $table->boolean('itemHot')->default(false);
            $table->boolean('itemNew')->default(false);
            $table->boolean('itemSale')->default(false);
            $table->string('itemImagePath', 255);
            $table->timestamps();
        });
//
//        DB::table('items')->insert(
//            array(
//                [
//                    'itemTitle' => 'Cool Clothing with Brown Stripes',
//                    'categoryId'=>1,
//                    'itemText'> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem. Maecenas elementum at diam consequat bibendum. Mauris iaculis fringilla ex, sit amet semper libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet. Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies velit vel accumsan porta.',
//                    'itemPrice'=>3.99,
//                    'itemStars'=>4,
//                    'itemHot'=>true,
//                    'itemImagePath'=>'product_1.jpg'
//                ],
//                [
//                    'itemTitle' => 'Denim Men Shirt',
//                    'categoryId'=>2,
//                    'itemText'> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem. Maecenas elementum at diam consequat bibendum. Mauris iaculis fringilla ex, sit amet semper libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet. Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies velit vel accumsan porta.',
//                    'itemPrice'=>13.99,
//                    'itemStars'=>2,
//                    'itemImagePath'=>'product_2.jpg'
//                ]
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
        Schema::dropIfExists('items');
    }
}
