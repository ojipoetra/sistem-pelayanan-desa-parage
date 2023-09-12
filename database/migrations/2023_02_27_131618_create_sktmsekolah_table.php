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
        Schema::create('sktmsekolah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_siswa');
            $table->string('tempatlahir_siswa');
            $table->string('tanggallahir_siswa');
            $table->string('jenis_kelamin_siswa');
            $table->string('agama');
            $table->string('kewarganegaraan_siswa');
            $table->string('pekerjaan_siswa');
            $table->string('alamat_siswa');
            $table->string('nama_ayah');
            $table->string('tempatlahir_ayah');
            $table->string('tanggallahir_ayah');
            $table->string('agama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_ayah');
            $table->string('nama_ibu');
            $table->string('tempatlahir_ibu');
            $table->string('tanggallahir_ibu');
            $table->string('agama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
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
        Schema::dropIfExists('sktmsekolah');
    }
};
