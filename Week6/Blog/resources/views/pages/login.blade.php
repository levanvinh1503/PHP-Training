<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Boostrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    </head>
    <body style="background: #eee">
        <!-- Login -->
        <div class="wrapper">
            <div class="container">
                <div class="form-signin">
                    <form id="form-login" method="POST" role="form">
                        <h2 class="title-login">Đăng nhập</h2>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email-login">
                            @if($errors->has('emailError'))
	    						<p style="color: red">{{ $errors->first('emailError') }}</p>
	    					@endif
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" name="password-login">
                            @if($errors->has('passwordError'))
	    						<p style="color: red">{{ $errors->first('passwordError') }}</p>
	    					@endif
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit-login" class="btn btn-primary" value="Login">
                        </div> 
				    </form>
			    </div>
		    </div>
	    </div>
        <!-- Script -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
