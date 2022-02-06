@extends('template.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Transaksi Penjualan Barang</h4>
    </div>
    <div class="card-body">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <a class="btn btn-sm btn-primary" href="{{ url('/penjualan/create') }}">
            Tambah Transaksi
        </a>
        <div class="mt-2 table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_pembeli }}</td>
                        <td>{{ $item->barang->nama }}</td>
                        <td>{{ $item->jumlah_barang }}</td>
                        <td>{{ rupiah($item->barang->harga) }}</td>
                        <td>{{ rupiah($item->total_harga) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
