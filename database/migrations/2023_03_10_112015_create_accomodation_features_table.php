<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodation_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accomadation_id');
            $table->foreign('accomadation_id')->references('id')->on('accomodations')->onDelete('cascade');
            $table->string('feature');
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
        Schema::dropIfExists('accomodation_features');
    }
};
