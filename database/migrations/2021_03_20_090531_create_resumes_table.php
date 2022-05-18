<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pendidikan')->nullable();
            $table->string('thn_pendidikan')->nullable();
            $table->string('tempat_pendidikan')->nullable();
            $table->string('ket_pendidikan')->nullable();
            $table->string('nama_sertifikat')->nullable();
            $table->string('thn_sertifikat')->nullable();
            $table->string('nama_pekerjaan')->nullable();
            $table->string('thn_pekerjaan')->nullable();
            $table->string('tempat_pekerjaan')->nullable();
            $table->string('ket_pekerjaan')->nullable();
            $table->string('nama_organisasi')->nullable();
            $table->string('thn_jabatan')->nullable();
            $table->string('ket_organisasi')->nullable();
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
        Schema::dropIfExists('resumes');
    }
}
