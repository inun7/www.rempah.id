<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // USER
    public function index()
    {	  
	  $produks = Produk::all();
	  return view('auth.user.index', compact('produks'));
    }
	
	public function v_login()
    { 
	  return view('auth.user.login');
    }

    public function v_register(){
      return view('auth.user.register');
    }

    public function v_forgotpassword(){
      return view('auth.user.forgotpassword');
    }
	
	

    // Operator
    public function indexOperator(){
      return view('auth.operator.login');
    }
	
	
	
	
    // Admin
    public function indexAdmin(){
      return view('auth.admin.login');
    }
	
}





















