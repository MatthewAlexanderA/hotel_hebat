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
            <h5 class="card-title">{{ $nama_pemesan }}</h5>
            <p class="card-text">
                Nama Tamu : {{ $nama_tamu }} <br>
                Email : {{ $email }} <br>
                No Telp : {{ $no_hp }} <br>
                Tipe Kamar : {{ $tipe_kamar }}
                Jumlah Kamar : {{ $jumlah_kamar }}
            </p>
            <p class="card-text">
                Informasi Reservasi <br>
                Tanggal Check In : {{ $tgl_check_in }} <br>
                Tanggal Check Out : {{ $tgl_check_out }} <hr>
            </p>
        </div>
    </div>      
</body>
</html>