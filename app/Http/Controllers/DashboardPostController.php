<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Ubah model yang digunakan ke Produk
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Produk::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     */ 
    public function show(Produk $produk) // Ubah model yang digunakan di sini
    {
        return $produk;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk) // Ubah model yang digunakan di sini
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk) // Ubah model yang digunakan di sini
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk) // Ubah model yang digunakan di sini
    {
        //
    }
}
