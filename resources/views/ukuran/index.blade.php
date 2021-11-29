@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Ukuran Barang</h1>
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/ukuran/create" class="btn btn-success"> + &nbspTambah Ukuran</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 1%;">No</th>
                                    {{-- <th style="width: 13%;">ID Ukuran</th> --}}
                                    <th>Ukuran</th>
                                    <th style="width: 1%;">Edit</th>
				                    <th style="width: 1%;">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ukuran as $dataUkuran=>$v)
                                    <tr>
                                        <td class="text-wrap text-center">{{ $dataUkuran + 1 }}</td>
                                        {{-- <td>{{ $v -> id }}</td> --}}
                                        <td>{{ $v -> ukuran }}</td>
                                        <td class="text-wrap"><a href="/ukuran/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
				                        <td class="text-wrap"><a href="/ukuran/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection