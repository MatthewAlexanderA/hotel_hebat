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

    <title>Admin | Hotel Hebat</title>
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
                        <a class="nav-link active" aria-current="page" >Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" >|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('kamar')" aria-current="page" href="{{ url('tipekamars') }}">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('fasilitaskamar')" aria-current="page" href="{{ url('fasilitaskamars') }}">Fasilitas Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('fasilitashotel')" aria-current="page" href="{{ url('fasilitass') }}">Fasilitas Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('resepsionis')" aria-current="page" href="{{ url('resepsioniss') }}">Resepsionis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <div id="content">
        <br>
        <div class="container">
            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>

</body>
</html>