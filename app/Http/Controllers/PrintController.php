<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function generatePDF(Pemesanan $pemesanan, $id)
    {

        $pemesanan = $pemesanan->get()->where('id', $id);

        echo $pemesanan;

        $data = [
            // 'id' => $pemesanan->id,
            // 'nama_pemesan' => $pemesanan->nama_pemesan,
            // 'email' => $pemesanan->email,
            // 'no_hp' => $pemesanan->no_hp,
            // 'nama_tamu' => $pemesanan->nama_tamu,
            // 'check_in' => $pemesanan->check_in,
            // 'check_out' => $pemesanan->check_out,
            // 'tipe_kamar' => $pemesanan->tipe_kamar,
            // 'jumlah_kamar' => $pemesanan->jumlah_kamar,
            'pemesanan' => $pemesanan
        ];

        $pdf = PDF::loadView('user.pemesanans.print', $data);

        return $pdf->download('strukhotel.pdf');
    }
}
