<?php 
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use Auth;


class LoginController extends \App\Http\Controllers\Controller{

	public function admin_login(){
		return view('auth.admin_login');
	}


	public function post_admin_login(Request $request){
		$this->validate($request,[
			'username' => 'required|email_phone_exists',
			'password' => 'required|password_very'
		],[
			'username.required' => 'Phải nhập email hoặc điện thoại',
			'password.required' => 'Phải nhập mật khẩu',
			'username.email_phone_exists' => 'Email hoặc số điện thoại không phù hợp',
			'password.password_very' => 'Mật khẩu của bạn không chính xác'
		]);
		 $account = User::where('email',request()->username)->orWhere('phone',request()->username)->first();
		 Auth::loginUsingId($account->id);

		 return redirect()->route('admin');
	}

	public function admin_logout(){
		Auth::logout();
		return redirect()->route('login');
	}
}
?>
