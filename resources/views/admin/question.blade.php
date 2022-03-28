@extends('admin.layouts.app')
@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Question Management</h4> </div>

            
            </div>

             <div class="col-sm-12">
                                
                        <div class="white-box">
                            <a href="{{route('admin/question/question_form')}}" class="btn btn-sm btn-primary btn-outline pull-right"> <i class="fa fa-plus" aria-hidden="true"></i> Add  Question</a>
                            <br>
                            <br>
                          
                            <div class="table-responsive" >
                                <table id="myTable" class="table display">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Group</th>
                                            <th>Question</th>
                                            {{-- <th>Figure</th> --}}
                                            <th>Answer</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($questions_list as $k=> $element)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $element->group->g_name }}</td>
                                            <td>{{ $element->q_text}}</td>
                                            {{-- <td>{{ $element->q_figure}}</td> --}}
                                            <td>{{ $element->right_answer->answers}}</td>
                                            <td>{{ $element->created_at}}</td>
                                            <td><a href="{{ route('admin/question/delete_question',['ques_id'=>$element->q_id]) }}" class="btn btn-sm btn-outline btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>

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
@endsection