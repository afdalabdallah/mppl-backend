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
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('user_id');
            $table->string('item_id');
            $table->integer('qty');
            $table->decimal('total_harga', $precision = 10, $scale = 2);
            $table->string('status');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->json('address')->nullable();
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
        Schema::dropIfExists('penyewaan');
    }
};
