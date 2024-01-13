<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('alt_spellings')->nullable();
            $table->string('iso_alpha2', 2)->nullable();
            $table->string('iso_alpha3', 3)->nullable();
            $table->integer('iso_numeric')->nullable();
            $table->string('fips_code')->nullable();
            $table->string('top_level_domain')->nullable();
            $table->json('languages')->nullable();
            $table->json('translations')->nullable();
            $table->string('demonym')->nullable();
            $table->boolean('landlocked')->default(false);
            $table->json('borders')->nullable();
            $table->float('area')->nullable();
            $table->string('flag')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
