<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\User;
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
	//Method use to view dashbaord
    public function dashboard(){
    	    /*if(Session::has('adminSession')){
            // Perform all actions
        }else{
            //return redirect()->action('AdminController@login')->with('flash_message_error', 'Please Login');
            return redirect('/admin')->with('flash_message_error','Please Login');
        }*/
    	return view('admin.dashboard');
    }

     public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success', 'Logged out successfully.');
       
    }
}
