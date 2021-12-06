@extends('layouts.dashboard')

@section('container')
<h1 class="h3 mb-2 text-gray-800">Pembayaran Barang</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/barang/create" class="btn btn-success"> + &nbspPembayaran</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Penerimaan</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Total Pembayaran</th>
                            <th style="width: 1%;">Bukti Pembayaran</th>
                            <th style="width: 1%;">Edit</th>
                            <th style="width: 1%;">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $data=>$v)
                            <tr>
                                <td>{{ $v -> id }}</td>
                                <td>{{ $v -> id_penerimaan }}</td>
                                <td>{{ $v -> tgl_bayar }}</td>
                                <td>{{ $v -> total_bayar }}</td>
                                <td class="text-wrap"><a href="/pembayaran/detail/{{ $v->id }}" class="btn btn-warning">Show</a></td>
                                <td class="text-wrap"><a href="/pembayaran/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                <td class="text-wrap"><a href="/pembayaran/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection