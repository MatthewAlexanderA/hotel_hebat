<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';
    protected $fillable = ['id', 'nama_pemesan', 'email', 'no_hp', 'nama_tamu', 'tipe_kamar'];
}
