<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Sampah;

class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sampahs = Sampah::all();
        return view('pages.user.dashboard', compact('sampahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.buat_sampah');
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
        'foto' => 'required|image|max:2048',
        'deskripsi' => 'required'
      ]);

      $foto = $request->file('foto');
      $new_name = rand() . '.' . $foto->getClientOriginalExtension();
      $foto->move(public_path('sampah'), $new_name);

      $form_data = array(
        'foto'      => $new_name,
        'deskripsi' => $request->deskripsi
      );

      Sampah::create($form_data);

      return redirect('/sampahs')->with('success', 'Sampah berhasil ditambahkan!');

        // $extension = $request->file('foto')->extension();
        // $imgname = date('dmyHis').'.'.$extension;
        //
        // $validatedData = $request->validate([
        //   'foto' => 'required|file|max:5000',
        //   'deskripsi' => 'required',
        // ]);
        //
        // $path = Storage::putFileAs('public/', $request->file('foto'), $imgname);
        //
        // $sampah = Sampah::create($validatedData);
        //
        // return redirect('/sampahs')->with('success', 'Sampah berhasil ditambahkan');
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

      return view('pages.user.edit_sampah', compact('sampah'));
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
            'foto'                => 'image|max:2048',
            'deskripsi'           => ''
          ]);

          $foto_name = rand() . '.' . $foto->getClientOriginalExtension();
          $foto->move(public_path('sampah'), $foto_name);
      }else{
          $request->validate([
            'deskripsi'           => ''
        ]);
      }

      $form_data = array(
        'foto' => $foto_name,
        'deskripsi' => $request->deskripsi
      );

      Sampah::whereId($id)->update($form_data);

      return redirect('/sampahs')->with('success', 'Sampah berhasil diperbarui!');

      // $validatedData = $request->validate([
      //     'foto' => 'required|max:255',
      //     'deskripsi' => 'required|max:255',
      // ]);
      //
      // Sampah::whereId($id)->update($validatedData);
      //
      // return redirect('/sampahs')->with('success', 'Sampah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
