<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		'nama' => 'required',
		'alamat' => 'required',
		'jenis_kelamin' => 'required',
		'no_hp' => 'required',
		'jenis_bank' => 'required',
		'rekening' => 'required',
		'email' => 'required|email',
		'password' => 'required|min:5'
		]);
		
		$form_data = array(
		'nama'  => $request->nama,
		'alamat' => $request->alamat,
		'jenis_kelamin' => $request->jenis_kelamin,
		'no_hp' => $request->no_hp,
		'jenis_bank' => $request->jenis_bank,
		'rekening' => $request->rekening,
		'email' => $request->email,
		'password' => Hash::make($request->password)
		);
		
		User::create($form_data);
		
		return redirect('/login')->with('success', 'Berhasil membuat akun!');
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
        //
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
        //
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
