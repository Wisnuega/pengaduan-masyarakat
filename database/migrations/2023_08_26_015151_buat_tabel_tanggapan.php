<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tanggapan',function(Blueprint $data){
            $data->integer('id_tanggapan')->autoIncrement();
            $data->integer('id_pengaduan');
            $data->date('tgl_tanggapan');
            $data->text('tanggapan');
            $data->integer('id_petugas');
            $data->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tanggapan');
    }
};
