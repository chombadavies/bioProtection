<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioproductPestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bioproduct_pest', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bioprotection_id')->nullable();
            $table->foreignId('pest_id')->nullable();
            $table->foreignId('valuechain_id')->nullable();
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
        Schema::dropIfExists('bioproduct_pest');
    }
}
