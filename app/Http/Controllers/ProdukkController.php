<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produkk;
use Illuminate\Http\Request;

class ProdukkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkk = Produkk::latest()->get();
        return view('produkk.index', compact('produkk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produkk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produkk              = new Produkk;
        $produkk->nama_produk = $request->nama_produk;
        $produkk->harga       = $request->harga;
        $produkk->stok        = $request->stok;
        $produkk->id_kategori = $request->id_kategori;
        $produkk->save();

        session()->flash('success', 'Data Berhasil ditambahkan');

        return redirect()->route('produkk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produkk = Produkk::findOrFail($id);
        return view('produkk.show', compact('produkk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produkk  = Produkk::findOrFail($id);
        $kategori = Kategori::all();
        return view('produkk.edit', compact('produkk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produkk              = Produkk::findOrFail($id);
        $produkk->nama_produk = $request->nama_produk;
        $produkk->harga       = $request->harga;
        $produkk->stok        = $request->stok;
        $produkk->id_kategori = $request->id_kategori;
        $produkk->save();

        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('produkk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produkk = produkk::findOrFail($id);
        $produkk->delete();
        return redirect()->route('produkk.index')->with('success', 'Data Berhail Dihapus');
    }
}