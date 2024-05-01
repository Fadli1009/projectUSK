<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class a2122102_Sp extends Model
{
    use HasFactory;
    protected $table = '2122102_sp';
    protected $fillable = ['a2122102_noSP', 'a2122102_idPelanggan', '2122102_tglSP'];

    public function pelanggan()
    {
        return $this->belongsTo(a2122102_Pelanggan::class, 'a2122102_idPelanggan');
    }
}
