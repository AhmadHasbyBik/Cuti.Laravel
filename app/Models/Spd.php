<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spd extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['tgl_berangkat','tgl_kembali'];
}
