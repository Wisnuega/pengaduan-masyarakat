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
        Schema::create('petugas',function(Blueprint $data){
            $data->integer('id_petugas');
            $data->string('nama_petugas',35);
            $data->string('username',25);
            $data->string('password',32);
            $data->string('telp',13);
            $data->enum('level',['admin','petugas']);
            $data->primary('id_petugas');
            $data->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('petugas');
    }
};
