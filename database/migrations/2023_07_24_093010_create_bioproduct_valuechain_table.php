<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioproductValuechainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bioproduct_valuechain', function (Blueprint $table) {
            $table->foreignId('valuechain_id')->nullable();
            $table->foreignId('bioproduct_id')->nullable();
            // $table->foreignId('pest_id');
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
        Schema::dropIfExists('bioproduct_valuechain');
    }
}
