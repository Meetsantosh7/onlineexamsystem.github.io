@extends('admin.layouts.app')
@section('content')

<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Question Add Form</h4> 
                </div>
            </div>
            
              <form action="{{route('admin/question/add_question')}}"  method="post"  class="form-horizontal" >
                {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-12">
                  
                    <div class="white-box">
                       <a href="{{route('admin/question/question_form')}}"  class="btn btn-sm btn-primary btn-outline pull-right"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back To List</a>
                     
                        <div class="row">
                           <div class="col-md-8">
                                <h3 class="box-title  text-center ">Add  Question</h3>
                              
                                   <div class="form-group">
                                       <label class="col-md-2">Select Category</label>
                                          <div class="col-md-10">
                                           <select class="form-control" name="category_id" required="required" >
                                            <option disabled="" selected="" value="">Select</option>
                                            @foreach ($categories_list as $k=> $element)
                                              <option value={{ $element->c_id }}>{{ $element->c_name }}</option>
                                            @endforeach
                                           </select>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="col-md-2">Select Group</label>
                                          <div class="col-md-10">
                                           <select class="form-control" name="group_id" required="required" >
                                            <option disabled="" selected="" value="">Select</option>
                                            @foreach ($groups_list as $k=> $element)
                                              <option value={{ $element->g_id }}>{{ $element->g_name }}</option>
                                            @endforeach
                                           </select>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="col-md-2">Question</label>
                                          <div class="col-md-10">
                                           <textarea class="form-control" placeholder="Add Question" name="question" required=""></textarea>
                                       </div>
                                    </div>

                                     <div class="form-group">
                                       <label class="col-md-2 text-success">Option1 <br> (Righ Answer)</label>
                                          <div class="col-md-10">
                                           <textarea class="form-control" placeholder="Enter Right Answer" name="ans_option" required=""></textarea>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="col-md-2">Option2</label>
                                          <div class="col-md-10">
                                            <textarea class="form-control" name="option2" id="check" placeholder="Enter Option 2" required=""></textarea>
                                       </div>
                                    </div>
                                    <!-- <textarea id="mytextarea" name="mytextarea">
                                          Hello, World!
                                        </textarea>
                                     -->
                                    <div class="form-group">
                                       <label class="col-md-2">Option3</label>
                                          <div class="col-md-10">
                                          <textarea class="form-control"  id="editor1" name="option3" placeholder="Enter Option3" required=""></textarea>
                                          <div id="editorContainer"></div>
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="col-md-2">Option4</label>
                                          <div class="col-md-10">
                                           <textarea class="form-control" name="option4" placeholder="Enter Option 4" required=""></textarea>
                                       </div>
                                    </div>


                                  

                                <button type="submit" class="btn btn-success m-r-10">Submit</button>
                                <button type="reset" class="btn  btn-dark ">Reset</button>
                                        <br>
                                        <br>

                               </form>
                           </div>
                           <div class="col-md-6">
                             
                           </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                </form>
            </div>
            
        </div>
       
        
</div>
{{-- @push('scripts')
   <script>


    CKEDITOR.replace( 'mytextarea' );

  

</script>
@endpush --}}
   


<footer class="footer text-center"> {{date('Y')}} &copy; Binod Thakur </footer>

@endsection




 




