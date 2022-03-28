@extends('admin.layouts.app')
@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"> Admin Dashboard </h4> </div>
                
               
            </div>
           
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row row-in">
                            <div class="col-lg-3 col-sm-6 row-in-br">
                                <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-danger"><i class="ti-clipboard"></i></span>
                                    </li>
                                    <li class="col-last">
                                        <h3 class="counter text-right m-t-15">23</h3>
                                    </li>
                                    <li class="col-middle">
                                        <h4>Total Exams</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-info"><i class="ti-wallet"></i></span>
                                    </li>
                                    <li class="col-last">
                                        <h3 class="counter text-right m-t-15">76</h3>
                                    </li>
                                    <li class="col-middle">
                                        <h4>Total Questions</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 row-in-br">
                                <ul class="col-in">
                                    <li>
                                        <span class="circle circle-md bg-success"><i class=" ti-shopping-cart"></i></span>
                                    </li>
                                    <li class="col-last">
                                        <h3 class="counter text-right m-t-15">93</h3>
                                    </li>
                                    <li class="col-middle">
                                        <h4>Total Students</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                      
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
       
        <footer class="footer text-center"> {{date('Y')}} &copy; Binod Thakur </footer>
</div>
@endsection