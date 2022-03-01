@extends('admin.layout')

@section('kamar')
active
@endsection

@section('content')
<br>
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

<form action="{{ route('tipekamars.update',$tipekamar->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')

    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                <input type="text" name="tipe_kamar" class="form-control" placeholder="Tipe Kamar" value="{{$tipekamar->tipe_kamar}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Jumlah Kamar:</strong>
                <input type="text" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" value="{{$tipekamar->jumlah_kamar}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection