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
        Schema::create('pengaduan',function(Blueprint $data){
            $data->integer('id_pengaduan');
            $data->date('tgl_pengaduan');
            $data->char('nik',16);
            $data->text('isi_laporan');
            $data->string('foto',255);
            $data->enum('status',['0','proses','selesai']);
            $data->primary('id_pengaduan');
            $data->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pengaduan');
    }
};
