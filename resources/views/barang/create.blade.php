@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/barang"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mt-2 mb-2 text-gray-800">Barang Baru</h1>
                </div>
                <div class="card-body">
                    <form action="/barang/store" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                            </div>
                            <div class="col-sm-6">
                                <label for="harga_beli_barang">Harga Beli</label>
                                <input type="text" class="form-control" id="harga_beli_barang" name="harga_beli_barang" placeholder="Harga Beli">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="id_jb">Jenis Barang</label>
                                <select class="form-control" id="id_jb" name="id_jb">
                                    @if($jenisbarang->count())
                                        @foreach($jenisbarang as $v)
                                            <option value="{{ $v->id }}">{{ $v->jenis_barang }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="harga_jual_barang">Harga Jual</label>
                                <input type="text" class="form-control" id="harga_jual_barang" name="harga_jual_barang" placeholder="Harga Jual">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="stok_barang">Stok Barang</label>
                            <input type="text" class="form-control" id="stok_barang" name="stok_barang" placeholder="Jumlah Stok">
                            </div>
                            <div class="col-sm-6">
                                <label for="formFile">Upload Foto Barang</label>
                                <input type="file" class="form-control" id="formFile">
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center justify-content-center mb-2 mt-3 ">
                            <input type="submit" class="btn btn-danger" value="Simpan Data">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>	
</div>	
@endsection