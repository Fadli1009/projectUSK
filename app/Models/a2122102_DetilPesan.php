<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class a2122102_DetilPesan extends Model
{
    use HasFactory;
    protected $table = '2122102_detil_pesan';
    protected $fillable = ['a2122102_noSP', 'a2122102_kdbarang', '2122102_jmljual', '2122102_hrgJual'];
    public function barang()
    {
        return $this->belongsTo(a2122102_Barang::class, 'a2122102_kdbarang');
    }
}
