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
            $table->foreignId('user_id');
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
            $table->string('nama_ayah')->nullable();
            $table->string('bin')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('tempatlahir_ayah')->nullable();
            $table->string('tanggallahir_ayah')->nullable();
            $table->string('kewarganegaraan_ayah')->nullable();
            $table->string('agama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('alamat_ayah')->nullable();
            // akhir orang tua ayah

            // data orang tua ibu
            $table->string('nama_ibu')->nullable();
            $table->string('binti')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('tempatlahir_ibu')->nullable();
            $table->string('tanggallahir_ibu')->nullable();
            $table->string('kewarganegaraan_ibu')->nullable();
            $table->string('agama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('alamat_ibu')->nullable();
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
