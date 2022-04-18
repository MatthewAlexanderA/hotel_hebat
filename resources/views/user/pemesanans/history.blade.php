@extends('user.layout')

@section('history')
active
@endsection

@section('content')

<!-- Table -->
<div class="container">
    <div class="row mb-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
          <a class="btn btn-primary" href="{{ route('pemesanans.create') }}"><b>Book</b></a>
          </div>
          <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                  <th scope="col">Nama Tamu</th>
                  <th scope="col">Tanggal Cek In</th>
                  <th scope="col">Tanggal Cek Out</th>
                  <th></th>
                </tr>
              </thead>
              @foreach ($pemesanans as $pemesanan)
              <tbody>
                  <td>{{ $pemesanan->nama_tamu }}</td>
                  <td>{{ $pemesanan->tgl_check_in }}</td>
                  <td>{{ $pemesanan->tgl_check_out }}</td>
                  <td>
                        <a class="btn btn-primary" href="{{ route('pemesanans.edit',$pemesanan->id) }}">Detail</a>
                        <a href="{{-- {{ url('/print', $pemesanan->id) }} --}}" class="btn btn-success">Print</a> 
                  </td>
                </tbody>
              @endforeach
        </table>
    </div>
</div>
<!-- Table -->

@endsection