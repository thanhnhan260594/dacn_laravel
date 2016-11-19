@extends('Shared.LayoutUser')

@section('content')
       
	<div class="login-page">
	  <div class="form modal-content">
 		@if(count($error)>0)
	    	<div class="alert alert-danger">
	    		@foreach($errors->all() as $err)
	    			{{$err}}<br>
	    		@endforeach
	    	</div>
	    @endif
	    @if(session('Thongbao'))
	    	<div class="alert alert-danger">
	    		{{session('Thongbao')}}
	    	</div>
	    @endif	

	    <form class="login-form" action="Dangnhap" method="post">
	    <h3>Đăng nhập</h3>
	    	<input type="hidden" name="_token" value="{{csrf_token()}}">
		    <input type="text" name="username" placeholder="Tên tài khoản"/>
		    <input type="password" name="password" placeholder="Mật khẩu"/>
		    <button tyle="submit" >Đăng nhập</button>
		    <p class="message">Not registered? <a href="#">Create an account</a></p>	  
	    </form>  
	  </div>
	</div> 

@endsection