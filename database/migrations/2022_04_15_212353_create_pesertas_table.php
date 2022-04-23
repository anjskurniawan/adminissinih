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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registrations_id');
            $table->string('jenis_sepeda');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('kelas');
            $table->string('tim');
            $table->string('email');
            $table->string('kota_asal');
            $table->integer('no_wa');
            $table->string('golongan_darah');
            $table->string('ukuran_jersey');
            $table->text('kartu_identitas');
            $table->timestamps();

            // constraints
            // $table->foreign('registrations_id')->references('registrations')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
};
