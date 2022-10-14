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
        Schema::create('kembalis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('nomor_peminjaman');
            $table->unsignedBigInteger('id_admin');
            $table->date('tanggal_pengembalian')->nullable();
            $table->text('keterangan')->nullable();
            $table->enum('status',['Aman', 'Kurang', 'Terlambat',])->nullable();
            $table->foreign('nomor_peminjaman')->references('idpeminajaman')->on('peminjamen')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('kembalis');
    }
};
