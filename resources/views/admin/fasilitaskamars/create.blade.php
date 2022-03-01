@extends('admin.layout')

@section('fasilitaskamar')
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

<form action="{{ route('fasilitaskamars.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                <select class="form-control" name="tipe_kamar">
                    @foreach($tipekamars as $tipekamar)
                    <option value="{{$tipekamar->tipe_kamar}}">{{$tipekamar->tipe_kamar}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Nama Fasilitas:</strong>
                <input type="text" name="fasilitas" class="form-control" placeholder="Nama Fasilitas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection