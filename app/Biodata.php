<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    protected $fillable = ['nama','jenis_kelamin','agama','alamat'];
}
