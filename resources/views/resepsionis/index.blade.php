@extends('resepsionis.layout')

@section('content')

    <!-- Table -->
    <div class="container">
        {{-- <div class="row mb-3">
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
            </div> --}}

            <div class="row">
                <div class="col-md-4">
                    <form action="{{ url()->current() }}" autocomplete="off" method="get">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="{{ url()->current() }}" method="get">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="filter">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                      <th scope="col">Nama Tamu</th>
                      <th scope="col">Tanggal Cek In</th>
                      <th scope="col">Tanggal Cek Out</th>
                    </tr>
                  </thead>
                  @foreach ($pemesanans as $pemesanan)
                  <tbody>
                      <td>{{ $pemesanan->nama_tamu }}</td>
                      <td>{{ $pemesanan->tgl_check_in }}</td>
                      <td>{{ $pemesanan->tgl_check_out }}</td>
                    </tbody>
                  @endforeach
                  
            </table>
        </div>
    </div>
    <!-- Table -->

@endsection