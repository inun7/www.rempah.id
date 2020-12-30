<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Operator;
class LoginController extends Controller
{
	
/*	function postLogin(Request $request){
		$data1 = User::where('email', $request->email)->where('password', $request->password)->get();
		$data2 = Operator::where('email', $request->email)->where('password', $request->password)->get();
		
		if(count($data1)>0){
		// berhasil login untuk user
			Auth::guard('users')->LoginUsingId($data1[0]['id']);
			return redirect('/sampahs');
		}else if(count($data2)>0){
		// berhasil login untuk operator
			Auth::guard('operators')->LoginUsingId($data2[0]['id']);
			return redirect('/sampahs2');
		}else{
		// gagal login
			return redirect('/')->with('danger', 'Gagal Login');
		}
	}
	
	function logout(){
		if(Auth::guard('users')->check()){
			Auth::guard('users')->logout();
		}else if(Auth::guard('operators')->check()){
			Auth::guard('operators')->logout();
		}
		return redirect('/')->with('warning', 'Gagal Login');
	} */

     public function loginUser(Request $request){
      $this->validate($request, [
		'email' => 'required|email',
		'password' => 'required|min:5',
		]);
		
		if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
			return redirect('/sampahs')->with('success', 'Berhasil Login!');
		}
		return redirect('/')->with('danger', 'Email atau Password Salah!!');
    }
	
/*	public function loginOperator(Request $request){
      $this->validate($request, [
		'email' => 'required|email',
		'password' => 'required|min:5',
		]);
		
		if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
			return redirect('/sampahs2')->with('success', 'Berhasil Login!');
		}
		return redirect('/operator')->with('danger', 'Email atau Password Salah!!');
    }
	
	public function LoginAdmin(Request $request){
      $this->validate($request, [
		'email' => 'required|email',
		'password' => 'required|min:5',
		]);
		
		if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
			return redirect('/sampahs3')->with('success', 'Berhasil Login!');
		}
		return redirect('/admin')->with('danger', 'Email atau Password Salah!!');
    } */
	
/*	public function loginUser(Request $request){
		$this->validate($request, [
		'email' => 'required|email',
		'password' => 'required|min:5',
		]);
		
		if(!empty(User::where('email', $request->email)->first())){
			$user = User::where('email', $request->email)->first();
			
			if(Hash::check($request->password, $user->password)){
				$request->session()->put('token_user', $this->token());
				$request->session()->put('email', $this->email());
				
				User::where('email', $request->email)->Update([
					'token' => $request->session()->get('token_user')
				]);
				
				return redirect('/sampahs')->with('success', 'Berhasil Login!');
			}
		}
		
		return redirect('/')->with('danger', 'Email atau Password Salah!!');
	} */
	
	public function token(){
		$str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$length = 12;
		$code = substr(str_shuffle($str), 0, $length);
		
		return $code;
	}
	
	public function logout(Request $request){
		$token = $request->session()->get('token_user');
		$user = User::where('token', $token)->first();
		$request->session()->flush();
		return redirect('/');
	}
	
/*	public function logout(){
		Auth::logout();
		return redirect('/');
	} */
}























