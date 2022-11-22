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
        Schema::create('pakaian', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->string('size');
            $table->string('merek');
            $table->string('category');
            $table->integer('stock');
            $table->decimal('harga', $precision = 10, $scale=2);
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
        Schema::dropIfExists('pakaian');
    }
};
