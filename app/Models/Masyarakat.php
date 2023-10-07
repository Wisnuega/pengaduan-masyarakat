<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    // set table
    protected $table = 'masyarakat';

    // set primary key
    protected $primaryKey = 'nik';
    
    // set auto increment
    public $incrementing = false;

    // set type data primary key
    protected $keyType = 'string';

    // set kolom yang dapat di isi masal
    protected $guarded = [];
}
