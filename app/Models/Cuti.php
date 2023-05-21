<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['tgl_awal','tgl_akhir'];

    public function employee() {
        return $this->belongsTo(Cuti::class);
    }
}
