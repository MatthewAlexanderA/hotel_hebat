@extends('admin.layout')

@section('resepsionis')
active
@endsection

@section('content')

<!-- Table -->
<div class="container">
    <div class="row mb-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <a class="btn btn-primary" href="{{ route('resepsioniss.create') }}"><b>Add +</b></a>
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
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              @foreach ($resepsioniss as $resepsionis)
              <tbody>
                  <td>{{ $resepsionis->username }}</td>
                  <td>{{ $resepsionis->password }}</td>
                  <td>
                      <form action="{{ route('resepsioniss.destroy',$resepsionis->id) }}" method="POST">

                          <a class="btn btn-primary" href="{{ route('resepsioniss.edit',$resepsionis->id) }}">Edit</a>

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

{!! $resepsioniss->links() !!}

@endsection