<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('image')->nullable(); 
            $table->string('brand');
            $table->string('cpu');
            $table->string('ram');
            $table->string('storage');
            $table->string('graphic');
            $table->string('display');
            $table->string('os');
            $table->string('battery');
            $table->string('weight');
            $table->string('warranty');
            $table->string('upgrade');

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
