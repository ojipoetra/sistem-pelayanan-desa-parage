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
        Schema::create('suratpengantarnikah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->string('nik_pemohon');
            $table->string('kelamin_pemohon');
            $table->string('tempatlahir_pemohon');
            $table->string('tanggallahir_pemohon');
            $table->string('kewarganegaraan_pemohon');
            $table->string('agama_pemohon');
            $table->string('pekerjaan_pemohon');
            $table->string('statuspernikahan_pemohon');
            $table->string('hasil_status');
            $table->string('alamat_pemohon');
            // akhir mempelay laki-laki

            // data calon pengatin
            $table->string('nama_calon');
            $table->string('bintun');
            $table->string('nik_calon');
            $table->string('kelamin_calon');
            $table->string('tempatlahir_calon');
            $table->string('tanggallahir_calon');
            $table->string('kewarganegaraan_calon');
            $table->string('agama_calon');
            $table->string('pekerjaan_calon');
            $table->string('alamat_calon');
            $table->string('tempat_akad');

            // data orang tua ayah
            $table->string('nama_ayah');
            $table->string('bin');
            $table->string('nik_ayah');
            $table->string('tempatlahir_ayah');
            $table->string('tanggallahir_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('agama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_ayah');
            // akhir orang tua ayah

            // data orang tua ibu
            $table->string('nama_ibu');
            $table->string('binti');
            $table->string('nik_ibu');
            $table->string('tempatlahir_ibu');
            $table->string('tanggallahir_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('agama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            // akhir data orang tua ibu
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
        Schema::dropIfExists('suratpengantarnikah');
    }
};
