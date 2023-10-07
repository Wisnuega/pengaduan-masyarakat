<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    // set table
    protected $table = 'pengaduan';

    // set primary key
    protected $primaryKey = 'id_pengaduan';

    // set auto increment
    public $incrementing = false;

    // set kolom yang dapat di isi masal
    protected $guarded = [];
}
