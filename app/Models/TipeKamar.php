<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    use HasFactory;
    protected $table = 'tipekamars';
    protected $fillable = ['id', 'tipe_kamar', 'jumlah_kamar'];
}
