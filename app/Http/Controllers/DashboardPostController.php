<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Produk::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:225',
            'harga' => 'required|max:225',  
            'deskripsi' => 'required|max:225'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 200);
        Produk::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    public function show(Produk $produk)
    {
        return $produk;
    }

    public function edit(Produk $produk)
    {
        return view('dashboard.posts.edit', [
            'produk' => $produk
        ]);
    }

    public function update(Request $request, Produk $produk)
{
    $validatedData = $request->validate([
        'nama_produk' => 'required|max:225',
        'harga' => 'required|max:225',
        'deskripsi' => 'required|max:225'
    ]);

    $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 200);

    $produk->update($validatedData);

    return redirect('/dashboard/posts')->with('success', 'Produk has been updated!');
}


    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect('/dashboard/posts')->with('success', 'Produk has been deleted!');
    }
}

