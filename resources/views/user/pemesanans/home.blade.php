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

    <title>Home | Hotel Hebat</title>
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
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#kamar">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page">|</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{ url('login') }}">Book</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Image -->
    <div class="text-center mt-5">
        <img style="width: 1000px;" src="assets/img/Home.jpg" class="rounded" alt="assets/img/no_image.png">
        <a href="{{ url('login') }}"><div class="d-grid gap-2 col-8 mx-auto">
            <button class="btn btn-primary mt-3 fs-6" type="button"><b>Book</b></button>
          </div></a>
      </div>
    <!-- Image -->

    <!-- About Me -->
    <div class="container mt-5">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Tentang Kami</h2>
                <p>Lepaskan diri anda ke Hotel Hebat. Dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolam renang dan pemandangan matahari terbenam yang memukau. Kid's Club yang luas - menawaekan beragam fasilitas dan kegiatan anak-anak yang akan melengkap kenyamanan keluarga. Convention Center kamu, dilengkai pelayanan lengkap dengan ruang konvensu tersebar di Bandung, mampu mengakomodasi hingga 3.000 delegasi, Manfaatkan ruang penyelengaraan knvensi M I C E ataupun mewujudkan acara pernikahan adat yang mewah</p>
            </div>
        </div>
    </div>
    <!-- About Me -->

    <!-- Kamar -->
    <section id="kamar" class="pt-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <h2>Kamar</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="card mb-3" style="max-width: 900px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="assets/img/deluxe.jpg" class="img-fluid rounded-start" alt="assets/img/no_image.jpg">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Tipe Deluxe</h5>
                              <p class="card-text">
                                    Kamar berukuran luas 32 m2<br>
                                    Kamar mandi shower<br>
                                    Coffee Maker<br>
                                    AC<br>
                                    LED TV 32 inch<br>
                                </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="row justify-content-center">
                      <div class="card mb-3" style="max-width: 900px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="assets/img/superior.jpg" class="img-fluid rounded-start" alt="assets/img/no_image.jpg">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Tipe Superior</h5>
                              <p class="card-text">
                                Kamar berukuran luas 45 m2<br>
                                Kamar mandi shower dan Both Tub<br>
                                Coffee Maker<br>
                                Sofa<br>
                                LED TV 40 inch<br>
                                AC<br>
                                </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kamar -->

    <!-- Fasilitas -->
    <section id="fasilitas" class="pt-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <h2>Fasilitas</h2>
                </div>
                <div class="row justify-content-center">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="assets/img/kamar.jpg" class="d-block w-100" alt="assets/img/no_image.jpg">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Layanan Kamar</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/kedai.jpg" class="d-block w-100" alt="assets/img/no_image.jpg">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Kedai Kopi</h5>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/parkir.jpg" class="d-block w-100" alt="assets/img/no_image.jpg">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Parkir Valet</h5>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fasilitas -->

    <!-- Footer -->
    <footer class="text-center pt-5">
        <p>Created by <a class="text-dark fw-bold" href="https://github.com/MatthewAlexanderA">Matthew Alexander A</a>
        </p>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

</body>
</html>