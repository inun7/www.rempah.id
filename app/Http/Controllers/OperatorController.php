<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Operator;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::all();
        return view('pages.admin.rekap_operator', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.buat_operator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		'nama_operator' => 'required',
		'alamat' => 'required',
		'jenis_kelamin' => 'required',
		'no_hp' => 'required',
		'email' => 'required|email',
		'password' => 'required|min:5'
		]);
		
		$form_data = array(
		'nama_operator'  => $request->nama_operator,
		'alamat' => $request->alamat,
		'jenis_kelamin' => $request->jenis_kelamin,
		'no_hp' => $request->no_hp,
		'email' => $request->email,
		'password' => Hash::make($request->password)
		);
		
		Operator::create($form_data);
		
		return redirect('/operators')->with('success', 'Berhasil membuat operator!');
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
        $operator = Operator::findOrFail($id);

		return view('pages.admin.edit_operator', compact('operator'));
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
			'nama_operator' => 'required',
			'alamat' => 'required',
			'no_hp' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:5'
       ]);
      
       Operator::whereId($id)->update($validatedData);
      
       return redirect('/operators')->with('success', 'Data Operator berhasil diperbarui!');
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
