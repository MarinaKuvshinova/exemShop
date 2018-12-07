<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table){
            $table->increments('id');
            $table->string('sizeName', 5);
        });

        // Insert some stuff
        DB::table('sizes')->insert(
            array(
                ['sizeName' => 'XS'],
                ['sizeName' => 'S'],
                ['sizeName' => 'M'],
                ['sizeName' => 'L'],
                ['sizeName' => 'XL'],
                ['sizeName' => 'XXL']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
