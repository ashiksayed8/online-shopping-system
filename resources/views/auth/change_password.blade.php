@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h2>Change Password</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pass_change') }}">
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
@endsection
