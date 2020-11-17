<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('login');
    }

    public function v_register(){
      return view('register');
    }

    public function v_forgetpass(){
      return view('forgetpass');
    }

    //USER
    public function vu_profil(){
      return view('user_profil');
    }

    // public function vu_dashboard(){
    //   return view('user_dashboard');
    // }
    //
    // public function vu_setor(){
    //   return view('user_setor');
    // }

    //BANK SAMPAH
    // public function vbs_dataPoin(){
    //   return view('bs_dataPoin');
    // }
    //
    // public function vbs_rekapDS(){
    //   return view('bs_rekapDS');
    // }
}
