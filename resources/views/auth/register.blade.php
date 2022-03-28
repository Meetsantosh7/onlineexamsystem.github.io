@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('login') }}" class="btn btn-sm btn-info text-white">Login</a>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="margin-top:10%;background-color:#ccc">
                <div class="card-header text-center "><b>{{ __('User Registration') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('User Type:') }}</label>

                           
                            <div class="col-md-3 mt-2">
                                <input type="radio" name="user_type"  value="teacher"> Teacher
                            </div>

                            <div class="col-md-3 mt-2">
                                <input type="radio" name="user_type" checked="" value="student"> Student
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name :') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Your Name">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('School :') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="school_id" required="">
                                    <option disabled="" selected="" value="">Select</option>
                                    @foreach ( $school_list as $k=> $element)
                                      <option value={{ $element->s_id }}>{{ $element->s_name }}</option>
                                    @endforeach
                                </select>
                                

                                @if ($errors->has('school_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('school_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Class :') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="class_id" required="">
                                    <option disabled="" selected="" value="">Select</option>
                                    
                                     @foreach ($class_list as $k=> $element)
                                      <option value={{ $element->cls_id }}>{{ $element->cls_name }}</option>
                                    @endforeach
                                </select>
                                

                                @if ($errors->has('school_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('school_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No :') }}</label>
                        


                            <div class="col-md-6">
                                <input id="number" type="text"   pattern="\d*" maxlength="10" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" required placeholder="Your mobile no." autocomplete="off">
                                @if ($errors->has('number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password :') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" autocomplete="off">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password :') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
