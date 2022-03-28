@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('register') }}" class="btn btn-sm btn-info text-white">Register</a>
    <a href="{{ route('about-us') }}" class="btn btn-sm btn-success text-white float-right" >About Us</a>
    <div class="row justify-content-center">

        <div class="col-md-6 ">
            <div class="card" style="margin-top:20%;background-color:#ccc">
                <div class="card-header text-center"><b>{{ __('Enter Your Login Credentials') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No:') }}</label>

                            <div class="col-md-6">
                                <input id="number"  autocomplete="off" type="text"   pattern="\d*" maxlength="10" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required autofocus>

                                @if ($errors->has('number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password:') }}</label>

                            <div class="col-md-6">
                                <input id="password" autocomplete="off" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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
