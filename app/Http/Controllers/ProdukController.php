<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();
        return view('pages.user.toko', compact('produks'));
    }

    public function vu_produk_orang()
    {
      $produks = Produk::all();
      return view('pages.user.produk_orang', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.buat_produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'nama_produk'         => 'required|max:255',
        'foto'                => 'required|image|max:2048',
        'deskripsi'           => 'required',
        'stok'                => 'required|numeric',
        'harga'               => 'required|numeric',
      ]);

      $foto = $request->file('foto');
      $new_name = rand() . '.' . $foto->getClientOriginalExtension();
      $foto->move(public_path('produk'), $new_name);

      $form_data = array(
        'nama_produk'         => $request->nama_produk,
        'foto'                => $new_name,
        'deskripsi'           => $request->deskripsi,
        'stok'                => $request->stok,
        'harga'               => $request->harga
      );

      Produk::create($form_data);

      return redirect('/produks')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $produk = Produk::findOrFail($id);
      return view('pages.user.detail_produk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $produk = Produk::findOrFail($id);

      return view('pages.user.edit_produk', compact('produk'));
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
      $foto_name = $request->hidden_name;
      $foto = $request->file('foto');

      if($foto != ''){
          $request->validate([
            'nama_produk'         => '',
            'foto'                => 'image|max:2048',
            'deskripsi'           => '',
            'stok'                => '',
            'harga'               => ''
          ]);

          $foto_name = rand() . '.' . $foto->getClientOriginalExtension();
          $foto->move(public_path('produk'), $foto_name);
      }else{
          $request->validate([
            'nama_produk'         => '',
            'deskripsi'           => '',
            'stok'                => '',
            'harga'               => ''
        ]);
      }

      $form_data = array(
        'nama_produk'        => $request->nama_produk,
        'foto'               => $foto_name,
        'deskripsi'          => $request->deskripsi,
        'stok'               => $request->stok,
        'harga'              => $request->harga,
      );

      Produk::whereId($id)->update($form_data);

      return redirect('/produks')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $produk = Produk::findOrFail($id);
      $produk->delete();

      return redirect('/produks')->with('success', 'Produk berhasil dihapus!');
    }
}
