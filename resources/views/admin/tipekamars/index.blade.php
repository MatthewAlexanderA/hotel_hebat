@extends('admin.layout')

@section('kamar')
active
@endsection

@section('content')

<!-- Table -->
<div class="container">
    <div class="row mb-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
          <a class="btn btn-primary" href="{{ route('tipekamars.create') }}"><b>Add +</b></a>
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
                  <th scope="col">Tipe Kamar</th>
                  <th scope="col">Jumlah Kamar</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              @foreach ($tipekamars as $tipekamar)
              <tbody>
                  <td>{{ $tipekamar->tipe_kamar }}</td>
                  <td>{{ $tipekamar->jumlah_kamar }}</td>
                  <td>
                      <form action="{{ route('tipekamars.destroy',$tipekamar->id) }}" method="POST">

                          <a class="btn btn-primary" href="{{ route('tipekamars.edit',$tipekamar->id) }}">Edit</a>

                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                </tbody>
              @endforeach
        </table>
    </div>
</div>
<!-- Table -->

@endsection