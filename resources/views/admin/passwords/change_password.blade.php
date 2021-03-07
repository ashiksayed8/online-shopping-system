<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h2>Change Password</h2></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.pass_change') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="old_pass" class="col-md-4 col-form-label text-md-right">{{ __('Old password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="old_pass" type="password" class="form-control @error('old_pass') is-invalid @enderror" name="old_pass" value="{{ old('old password') }}" required autocomplete="old_pass" autofocus>
    
                                    @error('old_pass')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="new_pass" class="col-md-4 col-form-label text-md-right">{{ __('New password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="new_pass" type="password" class="form-control @error('new_pass') is-invalid @enderror" name="new_pass" value="{{ old('New pass') }}" required autocomplete="new_pass" autofocus>
    
                                    @error('new_pass')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="confirm_pass" class="col-md-4 col-form-label text-md-right">{{ __('Confirm password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="confirm_pass" type="password" class="form-control @error('confirm_pass') is-invalid @enderror" name="confirm_pass" required autocomplete="current-password">
    
                                    @error('confirm_pass')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Change password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>



