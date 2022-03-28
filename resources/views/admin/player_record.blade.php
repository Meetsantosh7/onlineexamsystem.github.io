@extends('admin.layouts.app')
@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Player Record Management</h4> </div>
                
               
            </div>

                                <div class="col-sm-12">
                                    <a href="" class="btn btn-sm btn-primary btn-outline pull-right">Add Player Record</a>
            <br>
            <br>
                        <div class="white-box">
                            
                            <div class="table-responsive" >
                                <table id="myTable" class="table display">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Team</th>
                                            <th>Stage</th>
                                            <th>Score</th>
                                            <th>Card</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

           
            
            </div>
            
</div>
       
       
        
</div>
<footer class="footer text-center"> {{date('Y')}} &copy; Binod Thakur </footer>
@endsection