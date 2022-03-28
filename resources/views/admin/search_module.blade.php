@extends('admin.layouts.app')

@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Create Question Module</h4> </div>

            
            </div>

             <div class="col-sm-12">
                                
                        <div class="white-box">

                             <a href="{{route('admin/question_module')}}"  class="btn btn-sm btn-primary btn-outline pull-right"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back To List</a>
                             <br>
                             <br>
                       
                    
                         <form method="post" action="{{ route('admin/module_add') }}" method="post" >
                            {{ csrf_field() }}

                            <div class="table-responsive"  >

                                <table id="myTable" class="table display">
                                    <thead>
                                        <tr>
                                            <th>Check</th>
                                            <th>S.No.</th>
                                            <th>Questions</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                  
                                    @foreach ($fetch_questions as $element)
                                           <tr>
                                            <td><input type="checkbox" name="question_ids[]" class="check_box" value={{ $element->q_id }}></td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $element->q_text }}</td>
                                            <td>{{ $element->created_at }}</td>
                                           
                                           
                                        </tr>
                                     @endforeach  
                                      
                                        
                                    </tbody>
                                </table>
                            </div>
                               <div class="row">
       <div class="col-md-12 ">
           <div class="col-md-2">
               <label>Module Name:</label> 
           </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="module_name" required="">
            </div>
       </div>
       <div class="col-md-12 text-center" style="margin-top:10px;">
           <input type="submit" id="submit" class="btn btn-sm btn-success" value="Submit">
       </div>

        </form>
       
   </div>
                         
                        </div>
                    </div>

           
            
            </div>
            
</div>
       
       
        
</div>
@push('scripts')
<script>
  $('#submit').on('click',function(){
   
     var check_clicked=$('.check_box:checked').length;
   
     if(check_clicked==0){
      alert("Please add atleast Question to Module");
      return false;
     }

  });

</script>
@endpush

<footer class="footer text-center"> {{date('Y')}} &copy; Binod Thakur </footer>


@endsection