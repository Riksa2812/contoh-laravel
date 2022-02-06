@extends('template.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Masterdata Barang</h4>
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

        <a class="btn btn-sm btn-primary" href="{{ url('/barang/create') }}">
            Tambah
        </a>
        <div class="mt-2 table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok Tersedia</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ rupiah($item->harga) }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>
                                <a href="{{ url("/barang/$item->id/edit") }}" class="btn btn-info"> Edit</a>
                                <form action="{{ url("/barang/$item->id") }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"> Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection