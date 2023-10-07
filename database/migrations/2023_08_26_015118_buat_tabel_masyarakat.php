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
        Schema::create('masyarakat',function(Blueprint $data){
            $data->char('nik');
            $data->string('nama',35);
            $data->string('username',25);
            $data->string('password',32);
            $data->string('telp',13);
            $data->primary('nik');
            $data->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('masyarakat');
    }
};
