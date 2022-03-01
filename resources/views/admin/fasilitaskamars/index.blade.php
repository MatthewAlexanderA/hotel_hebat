@extends('admin.layout')

@section('fasilitaskamar')
active
@endsection

@section('content')

<!-- Table -->
<div class="container">
    <div class="row mb-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
          <a class="btn btn-primary" href="{{ route('fasilitaskamars.create') }}"><b>Add +</b></a>
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
                  <th scope="col">Nama Faisilitas</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              @foreach ($fasilitaskamars as $fasilitaskamar)
              <tbody>
                  <td>{{ $fasilitaskamar->tipe_kamar }}</td>
                  <td>{{ $fasilitaskamar->fasilitas }}</td>
                  <td>
                      <form action="{{ route('fasilitaskamars.destroy',$fasilitaskamar->id) }}" method="POST">

                          <a class="btn btn-primary" href="{{ route('fasilitaskamars.edit',$fasilitaskamar->id) }}">Edit</a>

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