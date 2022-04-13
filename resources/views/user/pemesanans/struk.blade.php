<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="width: 38%">
        <div style="text-align: center">
            <h4><b>Hotel Hebat</b></h4><br>
            <p>Jl. Raya Kopo No.399, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40223</p>
        </div>
        <div class="">
            <table>
                <tr>
                    <td>Nama Pemesan </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->nama_pemesan}}</td>
                </tr>
                <tr>
                    <td>Nama Tamu </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->nama_tamu}}</td>
                </tr>
                <tr>
                    <td>Email </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->email}}</td>
                </tr>
                <tr>
                    <td>No Hp </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->no_hp}}</td>
                </tr>
                <tr>
                    <td>Tanggal Cek In </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->tgl_check_in}}</td>
                </tr>
                <tr>
                    <td>Tanggal Cek Out </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->tgl_check_out}}</td>
                </tr>
                <tr>
                    <td>Tipe Kamar </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->tipe_kamar}}</td>
                </tr>
                <tr>
                    <td>Jumlah Kamar </td><td> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>{{$pemesanan->jumlah_kamar}}</td>
                </tr>
            </table>
            <br>
        </div>
        <a href="{{ url('dashboard') }}"><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</body>
</html>