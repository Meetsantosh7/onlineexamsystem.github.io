@extends('admin.layouts.app')
@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Schedule Mangement</h4> 
                </div>
                
               
            </div>
            <a href="../" class="btn btn-info btn-sm btn-outline pull-right">Back</a>
            <br>
            <br>
           
            <div class="row">

                <div class="col-sm-12">

                    <div class="white-box">
                        
                        <div class="row">
                            
                            <br>
                            <div class="col-md-4"></div>
                           <div class="col-md-4" style="background:#ccc;">
                                <h3 class="box-title  text-center text-danger">Edit Match Schedule</h3>
                               <form class="form-horizontal"  action="{{route('admin/schedule/update',['id'=>$schedule->id])}}" method="post">
                                 {{ csrf_field() }}

                                    <div class="form-group">
                                       <label class="col-sm-12">Choose Game Stage</label>
                                       <div class="col-sm-12">
                                           <select class="form-control" name="stage_id" required="required" >
                                            <option  hidden="" value="{{$stage->id}}">{{$stage->stage_name}}</option>
                                               @foreach ($stage_all as $name)
                                               
                                                <option   value="{{$name->id}}" >{{$name->stage_name}}</option>
                                                @endforeach

                                               
                                           </select>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="col-sm-12">Choose Team 1</label>
                                       <div class="col-sm-12">
                                           <select class="form-control" name="team1_id" required="required" >
                                            <option  hidden="" value="{{$team1->id}}">{{$team1->team_name}}</option>
                                               @foreach ($team_all as $name)
                                              
                                                 <option  value="{{$name->id}}" >{{$name->team_name}}</option>
                                                @endforeach
                                               

                                               
                                           </select>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="col-sm-12">Choose Team 2</label>

                                       <div class="col-sm-12">
                                           <select class="form-control" name="team2_id" required="" >
                                            
                                              <option  hidden="" value="{{$team2->id}}">{{$team2->team_name}}</option>
                                               @foreach ($team_all as $name)
                                               
                                                <option  value="{{$name->id}}" >{{$name->team_name}}</option>
                                              @endforeach
                                             
                                               
                                           </select>
                                       </div>
                                    </div>
                                   
                                   
                                        
                                    <div class="form-group">
                                        <label class="col-sm-12">Select English Match Date</label>
                                        <div class="col-sm-12">
                                            <input type="date" class="form-control" value="{{$schedule->date}}" name="date" placeholder="Select Date" required="">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-sm-12">Select Nepali Match Date</label>
                                        <div class="col-sm-12">
                                            
                                             <input type="text" name="nepali_date"  value="{{$schedule->nepali_date}}" class="bod-picker input-box form-control"  value="" data-toggle="tooltip"  data-placement="bottom" placeholder="मिति चयन गर्नुहोस" id="date">
                                             
                            
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-12">Enter Time</label>
                                        <div class="col-sm-12">
                                            <input type="time" required="" value="{{$schedule->time}}" class="form-control" name="time" placeholder="Select Date">
                                        </div>
                                    </div>

                                    
                                    

                                <button type="submit" class="btn btn-primary m-r-10">Update</button>
                                <button type="reset" class="btn  btn-danger ">Reset</button>
                                        <br>
                                        <br>

                               </form>
                           </div>
                           <div class="col-md-4">
                             
                           </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
       
        
</div>
<footer class="footer text-center"> {{date('Y')}} &copy; Binod Thakur </footer>
@endsection
