<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    // set table
    protected $table = 'tanggapan';

    // set primary key
    protected $primaryKey = 'id_tanggapan';

    // set auto increment
    public $incrementing = false;
    
    // set kolom yang dapat di isi masal
    protected $guarded = [];
}
