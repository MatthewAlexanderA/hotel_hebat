<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    use HasFactory;
    protected $table = 'fasilitaskamars';
    protected $fillable = ['id', 'tipe_kamar', 'fasilitas'];
}
