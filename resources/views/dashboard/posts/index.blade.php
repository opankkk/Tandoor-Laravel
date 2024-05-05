@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
</div>

<div class="table-responsive col-lg-8" >
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $produk)
            <tr>    
                <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urutan -->
                <td>{{ $produk->nama_produk }}</td> <!-- Menampilkan nama produk -->
                <td>{{ $produk->harga }}</td> <!-- Menampilkan harga -->
                <td>
                   <a href="/dashboard/posts/{{ $produk->id }}" class="badge bg-info"><span data-feather="eye"></span></a> 
                   <a href="" class="badge bg-warning"><span data-feather="edit"></span></a> 
                   <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a> 
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
