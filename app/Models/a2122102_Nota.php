<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class a2122102_Nota extends Model
{
    use HasFactory;
    protected $table = '2122102_nota';
    protected $fillable = ['2122102_noNota', '2122102_noSp', '2122102_tglnota', '2122102_jmlharga'];
}
