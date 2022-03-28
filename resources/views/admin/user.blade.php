@extends('admin.layouts.app')


@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">User Management</h4> </div>
                
               
            </div>

                                <div class="col-sm-12">
                                   
                        <div class="white-box">
                            
                        
                            <div class="table-responsive" >
                                <table id="myTable" class="table display">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Name</th>
                                            <th>School</th>
                                            <th>Register Date</th>
                                            <th>Admin Access Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      @foreach ($list_teacher as $element)
                                           <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $element->name }}</td>
                                            <td>{{ $element->school_rel->s_name }}</td>
                                            <td>{{ $element->created_at }}</td>
                                            <td><a href="{{ route('admin/user_status',['status'=>"A",'user_id'=>$element->id]) }}" class="btn btn-xs <?php echo ($element->status=="A")?"":"btn-outline" ?> btn-success" onclick="return confirm('Are you sure?')">Active</a> <a href="{{ route('admin/user_status',['status'=>"I",'user_id'=>$element->id]) }}" class="btn btn-xs <?php echo ($element->status=="I")?"":"btn-outline" ?> btn-info" onclick="return confirm('Are you sure?')">Inactive</a></td>
                                        </tr>
                                     @endforeach 
                                        
                                    </tbody>
                                </table>
                            </div>
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
