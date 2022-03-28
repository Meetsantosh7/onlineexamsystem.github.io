@extends('layouts.app')

@section('content')
<div class="container">
	<form  action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button   type="submit" class="btn btn-sm btn-info text-white"> <i class="fa fa-power-off"></i> Login</button>
                                    
    </form>
  {{-- <a href="{{ route('login') }}" class="btn btn-sm btn-info text-white">Back</a> --}}
    <div class="row justify-content-center text-white" style="margin-top:15%;" >
    
          <h1 class="text-white">Registration Successfull!!!</h1>
          
          
       
    </div>
    <p class="text-center text-warning"><b class="text-danger">Note:</b> If login not successfull please wait until admin verify  registration.</p>
</div>
@endsection
