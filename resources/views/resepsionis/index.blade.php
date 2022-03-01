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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>Resepsionis | Hotel Hebat</title>
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
                        <a class="nav-link active" aria-current="page" href="#home">Resepsionis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"> | </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-user"></i> Username </i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Table -->
    <div class="container">
        <div class="row mb-3">
            <div class="row justify-content-center mt-3">
                <form class="row g-3">
                    <div class="col-md-4">
                        <input type="date" class="form-control" id="tgl_cek_in">
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>
                      <th scope="col">Nama Tamu</th>
                      <th scope="col">Tanggal Cek In</th>
                      <th scope="col">Tanggal Cek Out</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Mark Otto</td>
                      <td>15-1-2022</td>
                      <td>17-1-2022</td>
                    </tr>
                    <tr>
                      <td>Jacob Thornton</td>
                      <td>15-1-2022</td>
                      <td>17-1-2022</td>
                    </tr>
                    <tr>
                      <td>Larry the Bird</td>
                      <td>15-1-2022</td>
                      <td>17-1-2022</td>

                    </tr>
                  </tbody>
            </table>
        </div>
    </div>
    <!-- Table -->

</body>
</html>