<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    // set table
    protected $table = 'petugas';

    // set primary key
    protected $primaryKey = 'id_petugas';

    // set auto increment
    public $incrementing = false;

    // set kolom yang dapat di isi masal
    protected $guarded = [];
}
