<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sampah;

class SampahController3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sampahs = Sampah::all();

        return view('pages.admin.rekap_sampah', compact('sampahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sampah = Sampah::findOrFail($id);

      return view('pages.admin.edit_sampah', compact('sampah'));
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
      $validatedData = $request->validate([
          'deskripsi' => '',
          'bobot' => '',
          'uang' => '',
      ]);

      Sampah::whereId($id)->update($validatedData);

      return redirect('/sampahs3')->with('success', 'Data sampah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sampah = Sampah::findOrFail($id);
      $sampah->delete();

      return redirect('/sampahs3')->with('success', 'Sampah telah berhasil dihapus.');
    }
}
