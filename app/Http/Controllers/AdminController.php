<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	//Admin Login
	public function login(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->input();
    		 if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin' => '1'])) {
                    //echo "Success"; die;
                    Session::put('adminSession', $data['email']);
                    return redirect('/admin/dashboard');
        	}else{
                    //echo "failed"; die;
                    return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
        	}
    	}
    	return view('admin.admin_login');
    }

    public function dashboard(){
    	return view('admin.dashboard');
    }
}
