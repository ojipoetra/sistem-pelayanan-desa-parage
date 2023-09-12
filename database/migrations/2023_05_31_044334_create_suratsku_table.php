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
        Schema::create('suratsku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_pemohon');
            $table->string('nik_pemohon');
            $table->string('tempatlahir_pemohon');
            $table->string('tanggallahir_pemohon');
            $table->string('kelamin_pemohon');
            $table->string('agama_pemohon');
            $table->string('pekerjaan_pemohon');
            $table->string('kewarganegaraan_pemohon');
            $table->string('alamat_pemohon');
            $table->string('jenis_usaha');
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
        Schema::dropIfExists('suratsku');
    }
};
