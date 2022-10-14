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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('id_anggota', 100)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('no_hp', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->enum('jenis_kelamin',['Pria', 'Wanita'])->nullable();
            $table->enum('Status Pinjam',['Tidak', 'Meminjam'])->nullable();
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
        Schema::dropIfExists('anggotas');
    }
};
