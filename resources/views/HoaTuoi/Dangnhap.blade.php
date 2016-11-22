@extends('Shared.LayoutUser')

@section('content')
       
	<div class="login-page">
	  <div class="form modal-content">

 		@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif

	    <form class="login-form" action="Dangnhap" method="post">
	    	<input type="hidden" name="_token" value="{{csrf_token()}}">

	    <h3>Đăng nhập</h3>
		    <input type="text" name="txtUser" placeholder="Tên tài khoản" class="textbox"/>
		    <input type="password" name="txtPass" placeholder="Mật khẩu" class="textbox"/>
		    <button tyle="submit" >Đăng nhập</button>
		    <p class="message">Chưa có tài khoản? <a href="Dangky">Đăng ký</a></p>	  
	    </form>  
	  </div>
	</div> 

@endsection