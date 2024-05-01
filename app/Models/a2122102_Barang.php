<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class a2122102_Barang extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = '2122102_barang';
    protected $primaryKey = 'a2122102_kdbarang';
    protected $fillable = ['a2122102_kdBarang', '2122102_nmBarang', '2122102_satuan', '2122102_stok', '2122102_hrgbarang'];
    public function barang()
    {
        return $this->hasMany(a2122102_Barang::class);
    }
}
