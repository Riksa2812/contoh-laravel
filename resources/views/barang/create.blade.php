@extends('template.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Tambah Barang</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('/barang') }}" method="POST">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
                
            @endif

            <div class="form-group row">
                <label for="barang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="barang" placeholder="Nama Barang" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga Barang</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga Barang" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-3 col-form-label">Penambahan Stok</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="stok" id="stok" placeholder="Stok" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url('/barang') }}" class="btn btn-light">Cancel</a>
        </form>
    </div>
</div>

@endsection
