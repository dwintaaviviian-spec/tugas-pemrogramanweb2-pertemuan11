<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();

        $totalBuku = Buku::count();
        $bukuTersedia = Buku::tersedia()->count();
        $bukuHabis = Buku::where('stok', 0)->count();

        return view('buku.index', compact(
            'bukus',
            'totalBuku',
            'bukuTersedia',
            'bukuHabis'
        ));
    }

    public function kategori($kategori)
{
    $bukus = Buku::where('kategori', $kategori)->get();

    $totalBuku = Buku::count();
    $bukuTersedia = Buku::tersedia()->count();
    $bukuHabis = Buku::where('stok', 0)->count();

    return view('buku.index', compact(
        'bukus',
        'kategori',
        'totalBuku',
        'bukuTersedia',
        'bukuHabis'
    ));
}

public function show($id)
{
    $buku = Buku::findOrFail($id);

    return view('buku.show', compact('buku'));
}

public function search(Request $request)
{
    $query = Buku::query();

    // Search keyword
    if ($request->filled('keyword')) {
        $query->where(function ($q) use ($request) {
            $q->where('judul', 'like', '%' . $request->keyword . '%')
              ->orWhere('pengarang', 'like', '%' . $request->keyword . '%')
              ->orWhere('penerbit', 'like', '%' . $request->keyword . '%');
        });
    }

    // Filter kategori
    if ($request->filled('kategori')) {
        $query->where('kategori', $request->kategori);
    }

    // Filter tahun
    if ($request->filled('tahun')) {
        $query->where('tahun_terbit', $request->tahun);
    }

    // Filter ketersediaan
    if ($request->ketersediaan == 'tersedia') {
        $query->where('stok', '>', 0);
    }

    if ($request->ketersediaan == 'habis') {
        $query->where('stok', 0);
    }

    $bukus = $query->latest()->get();

    $totalBuku = Buku::count();
    $bukuTersedia = Buku::tersedia()->count();
    $bukuHabis = Buku::where('stok', 0)->count();

    return view('buku.index', compact(
        'bukus',
        'totalBuku',
        'bukuTersedia',
        'bukuHabis'
    ));
}
}