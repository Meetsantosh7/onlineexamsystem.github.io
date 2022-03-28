@extends('admin.layouts.app')


@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"> Schedule Exam</h4> </div>
                
               
            </div>

                                <div class="col-sm-12">
                                   
                        <div class="white-box">
                             <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-primary btn-outline pull-right"> <i class="fa fa-plus" aria-hidden="true"></i> Add Schedule</a>
                             <br>
                             <br>
                            
                            <div class="table-responsive" >
                                <table id="myTable" class="table display">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Exam Name</th>
                                            <th>Exam Date</th>
                                            <th>Exam Start Time</th>
                                            <th>Exam End Time</th>
                                            <th>Total Schools</th>
                                            <th>Class</th>
                                            <th>Module</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      @foreach ($exam_list as $element)
                                           <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $element->e_name }}</td>
                                            <td>{{ $element->e_date }}</td>
                                            <td>{{ $element->e_start_time }}</td>
                                            <td>{{ $element->e_end_time }}</td>
                                            <td>
                                              <?php $array=array(); ?>
                                            @foreach($element->school_rel as $elem)
                                              <?php array_push($array,$elem->s_name); ?>
                                            @endforeach
                                            <?php echo implode(',',$array); ?>
                                            </td>
                                            <td>{{ $element->class_rel->cls_name }}</td>
                                            <td>{{ $element->module_rel->m_name}}</td>
                                            <td><a href="{{ route('admin/delete_exam',['exam_id'=>$element->e_id]) }}" class="btn btn-sm btn-outline btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                                        </tr>
                                     @endforeach 
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

           
            
            </div>
            
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" >
        <b>Schedule Exam</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('admin/add_schedule_exam') }}">
         {{ csrf_field() }}
      <div class="modal-body">
            <div class="row">
             <div class="col-md-12">
                     <div class="form-group">
                       <label class="col-md-4">Exam Name:</label>
                          <div class="col-md-8">
                           <input type="text" class="form-control" name="exam_name" placeholder="Exam Name" required="" autocomplete="">
                       </div>
                    </div>
             </div>
             </div>
             
             <div class="row" style="margin-top:8px;">
               <div class="col-md-12">
                     <div class="form-group">
                       <label class="col-md-4">Select School:</label>
                          <div class="col-md-8">
                           <select class="form-control school_id" name="school_id[]"  required="required"  multiple >
                            
                            @foreach ( $school_list as $k=> $element)
                              <option style="color:red;" value="{{ $element->s_id }}">{{ $element->s_name }}</option>
                            @endforeach
                           </select>
                       </div>`
                    </div>
             </div>
             </div>


               <div class="row" style="margin-top:8px;">
               <div class="col-md-12">
                     <div class="form-group">
                       <label class="col-md-4">Select Class:</label>
                          <div class="col-md-8">
                           <select class="form-control" name="class_id" required="required" >
                            <option  disabled="" selected="" value="" >Select</option>
                             @foreach ($class_list as $k=> $element)
                              <option value={{ $element->cls_id }}>{{ $element->cls_name }}</option>
                             @endforeach
                           </select>
                       </div>
                    </div>
             </div>
             </div>

               <div class="row" style="margin-top:8px;">
               <div class="col-md-12">
                     <div class="form-group">
                       <label class="col-md-4">Select Module:</label>
                          <div class="col-md-8">
                           <select class="form-control" name="module_id" required="required" >
                            <option  disabled="" selected="" value="" >Select</option>
                            @foreach ( $module_list as $k=> $element)
                              <option value={{ $element->m_id }}>{{ $element->m_name }}</option>
                            @endforeach
                           </select>
                       </div>
                    </div>
             </div>
             </div>

           

            <div class="row" style="margin-top:8px;">
               <div class="col-md-12">
                     <div class="form-group">
                       <label class="col-md-4">Exam Date:</label>
                          <div class="col-md-8">
                           <input type="date" class="form-control" name="exam_date" required="" placeholder="Exam Date">
                       </div>
                    </div>
             </div>
             </div>

             <div class="row" style="margin-top:8px;">
               <div class="col-md-12">
                     <div class="form-group">
                       <label class="col-md-4">Exam Start Time:</label>
                          <div class="col-md-8">
                           <input type="time" id="time" class="form-control hasWickedpicker" name="exam_s_time" required="" placeholder="Exam Time">
                       </div>
                    </div>
             </div>
             </div>

              <div class="row" style="margin-top:8px;">
               <div class="col-md-12">
                     <div class="form-group">
                       <label class="col-md-4">Exam End Time:</label>
                          <div class="col-md-8">
                           <input type="time" class="form-control  " name="exam_e_time" required="" placeholder="Exam Time">
                       </div>
                    </div>
             </div>
             </div>
             <div class="text-center" style="margin-top:20px;">
                 <input type="submit" name="submit" class="btn btn-sm btn-success" value="Submit">
                 
             </div>
      </div>
      </form>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
       
       
        
</div>
<footer class="footer text-center"> {{date('Y')}} &copy; Binod Thakur </footer>

@push('scripts')

<script type="text/javascript">
$('.school_id').multiselect({
 includeSelectAllOption:true,
 selectAllNumber:true,
 includeSelectAllIfMoreThan: 0,
 buttonWidth:'100%',
 nonSelectedText:'Select School',
 preventInputChangeEvent: true,
 enableFiltering: true,
 enableCaseInsensitiveFiltering: true,
 buttonText: function (options) {
         if (options.length == 0) {
             return 'None selected';
         } else {
             var selected = 0;
             options.each(function () {
                 selected += 1;
             });
             return selected +  ' Selected ';
         }
     }
});
</script>



@endpush

@endsection
