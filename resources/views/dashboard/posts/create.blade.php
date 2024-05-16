@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Tambah Produk</h1>
  </div>
    <form method="post" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk"  autofocus value="{{ old('nama_produk') }}">
            @error('nama_produk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"   autofocus value="{{ old('hargas') }}"">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Gambar</label>
            @error('deskripsi')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
        

       
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>
  <div class="col-lg-8">

  </div>
@endsection