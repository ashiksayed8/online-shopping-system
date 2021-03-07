<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
 body {
    margin: 0;
    padding: 0;
    background-image: url(public/admin_design/image/admin2.jpg);
    -webkit-background-size: cover;
    background-size: cover;
    background-size: auto;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    font-family: Poppins;
    background-size: 100%;
}

.wrapper {
    width: 400px;
    height: 420px;
    color: #000;
    top: 50%;
    left: 50%;
    padding: 60px 30px;
    position: absolute;
    transform: translate(-50% ,-50%);
    box-sizing: border-box;
    box-shadow: 8px 8px 50px #000;
}

h1{
    margin: 0;
    padding: 0;
    font-weight: bold;
    font-size: 22px;
    color: #fff;
    text-align: center;
    margin-bottom: 8%;
    font-family: Courgette;
}


.wrapper input {
    width: 100%;
    margin-bottom: 20px;
}


.wrapper input[type=email], .wrapper input[type=password] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 30px;
    font-size: 20px;
    font-weight: bold;
    opacity: 1;
    color: #fff;
}

.wrapper input[type=submit] {
    border: none;
    outline: none;
    height: 40px;
    background: #f6648b;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
}

.wrapper input[type=submit]:hover {
    cursor: pointer;
    background: #64f67c;
}

.wrapper a {
    font-size: 14px;
    text-decoration: none;
    color: rgba(255, 255, 255, 0.795);
    opacity: 0.8;
}

.wrapper a:hover {
    color:#fff;
    opacity: 1;
}

.bottom-text {
    color: green;
}

.bottom-text input {
    width: 10%;
    float: left;
    
}

.bottom-text a {
    float: right;
}

#overlay-area {
    position: absolute;
    background-color: rghb(0,0,0,1);
    z-index: -5;
    height: 100%;
    width: 100%;
}


</style>
</head>
<body>
   
    <div class="wrapper">
        <h1> Admin Sing In</h1>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input type="password" placeholder="Password"   class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input type="submit" value="LOGIN">
        </form>
        <div class="bottom-text mt-5">
            {{-- <input type="checkbox" name="remember" checked="checked"> <span>Remambar</span> --}}
            <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
            {{-- <a href="">Forgot Password ?</a> --}}
        </div>
        <div id="overlay-area">
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>


{{-- @extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  
@endsection --}}
