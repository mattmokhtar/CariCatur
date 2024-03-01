<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreastCancersTable extends Migration
{
    public function up()
    {
        Schema::create('breast_cancers', function (Blueprint $table) {
            $table->id();
            $table->float('radius_mean');
            $table->float('texture_mean');
            $table->float('perimeter_mean');
            // Add more columns as needed
            $table->string('diagnosis'); // Assuming the diagnosis is a string
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('breast_cancers');
    }
}

