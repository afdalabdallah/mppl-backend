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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('order_id');
            $table->string('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('no_telp');
            $table->string('bank');
            $table->string('nomor_bank');
            $table->string('no_resi');
            $table->string('foto_resi');
            $table->string('foto_paket');
            $table->string('note')->nullable();
            $table->string('status');
            $table->string('rejected_msg');
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
        Schema::dropIfExists('pengembalian');
    }
};
