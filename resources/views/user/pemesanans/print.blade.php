<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Reservasi Kamar</title>
</head>
<body>
    <div class="mt-3 card">
        <div class="card-body">
            @foreach($pemesanan as $p)
            <h5 class="card-title">{{ $p->nama_pemesan }}</h5>
            <p class="card-text">
                Nama Tamu : {{ $p->nama_tamu }} <br>
                Email : {{ $p->email }} <br>
                No Telp : {{ $p->no_hp }} <br>
                Tipe Kamar : {{ $p->tipe_kamar }}
                Jumlah Kamar : {{ $p->jumlah_kamar }}
            </p>
            <p class="card-text">
                Informasi Reservasi <br>
                Tanggal Check In : {{ $p->tgl_check_in }} <br>
                Tanggal Check Out : {{ $p->tgl_check_out }} <hr>
            </p>
            @endforeach
        </div>
    </div>      
</body>
</html>