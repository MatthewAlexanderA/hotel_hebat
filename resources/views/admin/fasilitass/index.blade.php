@extends('admin.layout')

@section('fasilitashotel')
active
@endsection

@section('content')

<!-- Table -->
<div class="container">
    <div class="row mb-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
          <a class="btn btn-primary" href="{{ route('fasilitass.create') }}"><b>Add +</b></a>
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
                  <th scope="col">Nama Fasilitas</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              @foreach ($fasilitass as $fasilitas)
              <tbody>
                  <td>{{ $fasilitas->nama_fasilitas }}</td>
                  <td>{{ $fasilitas->keterangan }}</td>
                  <td>
                      <form action="{{ route('fasilitass.destroy',$fasilitas->id) }}" method="POST">

                          <a class="btn btn-primary" href="{{ route('fasilitass.edit',$fasilitas->id) }}">Edit</a>

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