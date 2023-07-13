<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('valuechain_id');
            $table->foreignId('pest_id');
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('image')->nullable();
            $table->enum('category',['microbial','naturalProduct']);
            $table->string('active_ingredient')->nullable();
            $table->string('registrant')->nullable();
            $table->string('manufacture')->nullable();
            $table->string('reg_no')->nullable();
            $table->string('fact_sheet')->nullable();
            $table->text('details')->nullable();
            $table->text('distributor_details')->nullable();
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
        Schema::dropIfExists('bio_products');
    }
}
