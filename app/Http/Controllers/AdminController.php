<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use app\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->input();
    		if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'admin'=>'1'])){
    			//echo "Success"; die;
    			return redirect('/admin/dashboard')->with('success', 'Login Successful') ;
    		}else{
    			return redirect('/admin')->with('error', 'Invalid details');
    		}
    	}
    	return view('krypto.ltr.authentication-login');
    }
    public function dashboard(){
    	return view('krypto.ltr.dashboard');
    }
    public function logout(){
    	Session::flush();
    	return redirect('/admin')->with('success', 'Logged out success');
    }
    public function setting(){
    	return view('krypto.ltr.password');
    }
    public function chkPass(Request $request){
    	$data = $request->all();
    	$curPass = $data['OldPass'];
    	$chkPass = User::where(['admin'=>'1'])->first();
    	if(Hash::check($curPass, $chkPass->password)){
    		echo "true" ; die;
    	}else {
    		echo "false"; die;
    	}
    }
}
