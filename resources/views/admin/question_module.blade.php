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
                           <form  action="{{ route('admin/question_search') }}"  method="post" style="border:2px solid #ccc;padding:10px;margin-bottom:20px;">
                            {{ csrf_field() }}
                            <div class="row" id="search_row" >
                               
                                    <div class="col-md-6">
                                        
                                            <div class="form-group">
                                            <label class="col-md-3 control-label" >Category</label>
                                            <div class="col-md-6">
                                             <div class="form-group">
                                                 <select class="form-control" name="category_id">
                                                 <option disabled="" selected="" value="">Select</option>
                                                 @foreach ($categories_list as $element)
                                                  <option value="{{ $element->c_id}}">{{ $element->c_name}}</option>
                                                  @endforeach
                                             </select>
                                             </div>
                                            
                                        
                                          
                                             </div>
                                            </div>

                                           
                                        
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" >Group</label>
                                            <div class="col-md-6">
                                             <div class="form-group">
                                             <select class="form-control" name="group_id">
                                                 <option disabled="" selected="" value="">Select</option>
                                                  @foreach ($groups_list as $element)
                                                  <option value="{{ $element->g_id}}">{{ $element->g_name}}</option>
                                                  @endforeach
                                             </select>
                                             </div>
                                           
                                          
                                             </div>
                                            </div>

                                        
                                    </div>

                                      <div class="form-group text-center">
                                                   <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Search</button>
                                      </div>
                                        
                                
                            </div>
                            </form>
                   

                            <div class="table-responsive"  >

                                <table id="myTable" class="table display">
                                    <thead>
                                        <tr>
                                           
                                            <th>S.No.</th>
                                            <th>Questions Module</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                  
                                    @foreach ($module_list as $element)
                                           <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $element->m_name }}</td>
                                            <td>{{ $element->created_at }}</td>
                                            <td><a href="" class="btn btn-sm btn-outline btn-danger">Edit</a> <a href="" class="btn btn-sm btn-outline btn-info">View</a></td>
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
       
       
        
</div>
<footer class="footer text-center"> {{date('Y')}} &copy; Binod Thakur </footer>
@endsection