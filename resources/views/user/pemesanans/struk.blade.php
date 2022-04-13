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
    <div class="container">
        <div style="text-align: center">
            <h4><b>Hotel Hebat</b></h4><br>
            <p>Jl. Raya Kopo No.399, Kb. Lega, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40223</p>
        </div>
        <div class="table">
            <table>
                <th>
                    <td>Nama Pemesan: </td>
                    <td>{{$pemesanan->nama_pemesan}}</td>
                </th>
                <th>
                    <td>Nama Tamu: </td>
                    <td>{{$pemesanan->nama_tamu}}</td>
                </th>
                <th>
                    <td>Email: </td>
                    <td>{{$pemesanan->email}}</td>
                </th>
                <th>
                    <td>No Hp: </td>
                    <td>{{$pemesanan->no_hp}}</td>
                </th>
                <th>
                    <td>Tanggal Cek In: </td>
                    <td>{{$reservasis->tgl_check_in}}</td>
                </th>
                <th>
                    <td>Tanggal Cek Out: </td>
                    <td>{{$reservasis->tgl_check_out}}</td>
                </th>
                <th>
                    <td>Tipe Kamar: </td>
                    <td>{{$pemesanan->tipe_kamar}}</td>
                </th>
                <th>
                    <td>Jumlah Kamar: </td>
                    <td>{{$pemesanan->jumlah_kamar}}</td>
                </th>
            </table>
        </div>
        <a href="/home"></a><button type="button" class="btn btn-danger">Back</button>
    </div>
</body>
</html>