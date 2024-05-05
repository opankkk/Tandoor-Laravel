@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Tambah Produk</h1>
  </div>
    <form method="produk" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga">
        </div>
        {{-- <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input id="gambar" type="hidden" name="gambar">
            <trix-editor input="x"></trix-editor>
        </div> --}}

       
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>
  <div class="col-lg-8">

  </div>
@endsection