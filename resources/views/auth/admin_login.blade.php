@extends('layout.auth')

@section('content')
<form class="login100-form validate-form flex-sb flex-w" method="POST">
	<span class="login100-form-title p-b-53">
		Đăng nhập với
	</span>

	<a href="#" class="btn-face m-b-20">
		<i class="fa fa-facebook-official"></i>
		Facebook
	</a>

	<a href="#" class="btn-google m-b-20">
		<img src="{{url('public/auth')}}/images/icons/icon-google.png" alt="GOOGLE">
		Google
	</a>
	
	<div class="p-t-31 p-b-9">
		<span class="txt1">
			Điện thoại hoặc email
		</span>
	</div>
	<div class="wrap-input100 validate-input @if($errors->has('username')) has-error @endif">
		<input class="input100" type="text" name="username" placeholder="Điện thoại hoặc email ... ">
		
	</div>
	@if($errors->has('username'))
	<div class="help-block container-fluid wrap-input100">
		{{$errors->first('username')}}
	</div>
	@endif
	
	<div class="p-t-13 p-b-9">
		<span class="txt1">
			Mật khẩu
		</span>

		<a href="#" class="txt2 bo1 m-l-5">
			Quên mật khẩu?
		</a>
	</div>
	<div class="wrap-input100 validate-input @if($errors->has('password')) has-error @endif">
		<input class="input100" type="password" name="password" >

	</div>
	@if($errors->has('password'))
	<div class="help-block container-fluid wrap-input100">
		{{$errors->first('password')}}
	</div>
	@endif

	<div class="container-login100-form-btn m-t-17">
		<button class="login100-form-btn">
			Đăng nhập
		</button>
	</div>
	@csrf
</form>
@stop()