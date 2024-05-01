<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class a2122102_Pelanggan extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = '2122102_pelanggan';
    protected $primaryKey = 'a2122102_idPelanggan';
    protected $fillable = ['a2122102_idPelanggan', '2122102_nmPelanggan', '2122102_alamat', '2122102_noTelp'];
}
