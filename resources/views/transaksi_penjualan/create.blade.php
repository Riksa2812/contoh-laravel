@extends('template.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Transaksi Penjualan</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('/penjualan') }}" method="POST">
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
                <label for="pembeli" class="col-sm-3 col-form-label">Nama Pembeli</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_pembeli" id="pembeli" placeholder="Nama Pembeli" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-9">
                    <select name="barang_id" class="form-control" id="nama_barang" required>
                        @foreach ($data as $barang)
                            <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>  
            <div class="form-group row">
                <label for="jumlah_barang" class="col-sm-3 col-form-label">Jumlah Barang</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="jumlah barang" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{ url('/penjualan') }}" class="btn btn-light">Cancel</a>
        </form>
    </div>
</div>

@endsection
