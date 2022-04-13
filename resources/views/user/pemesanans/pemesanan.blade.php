@extends('user.layout')

@section('book')
active
@endsection

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
        @endif

    <!-- Order Form -->
    <section id="pesan" class="pt-2">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <h2>Form Pemesanan</h2>
                </div>
                <div class="row justify-content-center">
                    <form class="row g-3" action="{{ route('pemesanans.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-6">
                            <label for="tgl_cek_in" class="form-label">Tanggal Cek In</label>
                            <input type="date" class="form-control" id="tgl_cek_in" name="tgl_check_in">
                        </div>
                        <div class="col-md-6">
                            <label for="tgl_cek_out" class="form-label">Tanggal Cek Out</label>
                            <input type="date" class="form-control" id="tgl_cek_out" name="tgl_check_out">
                        </div>
                          <input type="hidden" class="form-control" id="nama" placeholder="" name="nama_pemesan" value="{{ auth()->user()->username }}">
                        <div class="col-12">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="example@example.com" name="email">
                        </div>
                        <div class="col-12">
                            <label for="telp" class="form-label">No Handphone</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">+62</span>
                                    <input type="text" class="form-control" id="telp" aria-describedby="basic-addon3" name="no_hp">
                                </div>
                          </div>
                        <div class="col-md-6">
                          <label for="tamu" class="form-label">Nama Tamu</label>
                          <input type="text" class="form-control" id="tamu" name="nama_tamu">
                        </div>
                        <div class="col-md-4">
                          <label for="tipe" class="form-label">Tipe Kamar</label>
                          <select class="form-control" name="tipe_kamar">
                            @foreach($tipekamars as $tipekamar)
                            <option value="{{$tipekamar->tipe_kamar}}">{{$tipekamar->tipe_kamar}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-md-2">
                          <label for="jumlah" class="form-label">Jumlah Kamar</label>
                          <input type="number" class="form-control" id="jumlah" name="jumlah_kamar">
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

@endsection