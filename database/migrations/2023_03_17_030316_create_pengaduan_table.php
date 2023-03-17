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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan', '11')->nullable();
            $table->date('tgl_pengaduan')->nullable();
            $table->string('nik', '16')->nullable();
            $table->text('isi_laporan')->nullable();
            $table->string('foto', '255')->nullable();
            $table->enum('status',['0', 'proses', 'selesai'])->default('0')->nullable();
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
        Schema::dropIfExists('pengaduan');
    }
};
