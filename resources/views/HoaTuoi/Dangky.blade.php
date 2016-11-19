@extends('Shared.LayoutUser')

@section('content')

        <div class="register-page">
        <div class="form modal-content">        
        	<form action="Dangky" method="post">

          		<h3>Đăng ký tài khoản</h3>
	    		<input type="hidden" name="_token" value="{{csrf_token()}}" />
             	<input type="text" id="name" spellcheck="false" placeholder="Họ và tên"/>
            	<input type="text" id="email" spellcheck="false" placeholder="Email"/>
            	<input type="text" id="username" spellcheck="false" placeholder="Tên tài khoản" />
            	<input type="password" id="password" placeholder="Mật khẩu" />
            	<input type="password" id="password-again" placeholder="Nhập lại mật khẩu" />            
            	<button type="submit">Đăng ký</button>
        	</form>
        </div>
        </div>


@endsection