<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Book | Hotel Hebat</title>
</head>

<body id="home" class="pt-5">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Hebat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('home#home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('home#kamar') }}">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('home#fasilitas') }}">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Book</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page">|</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('login') }}">Admin</a>
                </li>
                </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Order Form -->
    <section id="pesan" class="pt-2">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <h2>Form Pemesanan</h2>
                </div>
                <div class="row justify-content-center">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="tgl_cek_in" class="form-label">Tanggal Cek In</label>
                            <input type="date" class="form-control" id="tgl_cek_in">
                        </div>
                        <div class="col-md-6">
                            <label for="tgl_cek_out" class="form-label">Tanggal Cek Out</label>
                            <input type="date" class="form-control" id="tgl_cek_out">
                        </div>
                        <div class="col-12">
                            <label for="nama" class="form-label">Nama Pemesan</label>
                          <input type="text" class="form-control" id="nama" placeholder="">
                        </div>
                        <div class="col-12">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="example@example.com">
                        </div>
                        <div class="col-12">
                            <label for="telp" class="form-label">No Handphone</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">+62</span>
                                    <input type="text" class="form-control" id="telp" aria-describedby="basic-addon3">
                                </div>
                          </div>
                        <div class="col-md-6">
                          <label for="tamu" class="form-label">Nama Tamu</label>
                          <input type="text" class="form-control" id="tamu">
                        </div>
                        <div class="col-md-4">
                          <label for="tipe" class="form-label">Tipe Kamar</label>
                          <select id="tipe" class="form-select">
                            <option selected>Deluxe</option>
                            <option>Superior</option>
                          </select>
                        </div>
                        <div class="col-md-2">
                          <label for="jumlah" class="form-label">Jumlah Kamar</label>
                          <input type="number" class="form-control" id="jumlah">
                        </div>
                        <div class="col-12">
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="submit" class="btn btn-primary">Konfirmasi Pesanan</button>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Order Form -->

    <!-- Footer -->
    <footer class="text-center pt-5">
        <p>Created by <a class="text-dark fw-bold" href="https://github.com/MatthewAlexanderA">Matthew Alexander A</a>
        </p>
    </footer>
    <!-- Footer -->

</body>
</html>