<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset(STATIC_DIR.'css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>CrackSee</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset(STATIC_DIR.'backend/plugins/images/football.png')}}">
    <style type="text/css">
   
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  nav_modify" >
  <a class="navbar-brand" href="#">Welcome, {{ucfirst(Auth::user()->name)}} !</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active" style="color:#fff;margin-right:5px;">
        <form  action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button   type="submit" class="btn btn-primary btn-outline text-center"> <i class="fa fa-power-off"></i> Logout</button>
                                    
          </form>
      </li>
    
      
      
    </ul>
    
  </div>
</nav>
    <div class="container-fluid">
        
       

      <div class="container wrapper">

      <div class="text-center text-white mt-4 mb-4">
        <h1 style="display:inline;background-color:black;padding:2px 5px;">Result</h1>
      </div>
       <h1 class="text-center bg-success text-white">Your Score: {{ $correct_result }} Out Of {{ $total_question }}</h1>

       @foreach ($user_ques_ans as $k=> $element)
               <div class="row">
                <div class="col-md-12">
                <h1><span class="text-success">Q.{{$k+1}}</span> {{$element->questions_rel->q_text}}</h1>
              
                
                 @foreach ($element->manyanswers as $kk=>$elem)
                   
                  
                 
                 <?php if($element->user_option_id==$elem->ans_id){
                   if($elem->ans_id==$element->questions_rel->ans_id){
                    echo '<div style="color:green;">';
                   }else{
                     echo '<div style="color:red;">';
                   }
                 

                  ?>

                  <?php 
                 }else{
                  echo '<div>';
                 }
                 ?>
                 <input type="radio" readonly="" onclick="return false;" <?php echo  ($elem->ans_id==$element->questions_rel->ans_id)?"checked":"";?> > <label>{{$elem->answers}}</lablel>
                  </div>
             

                  
                 @endforeach
               
                </div>
                </div>
       @endforeach

       <div class="text-center text-white mt-4 mb-4">
       <button class="btn btn-info btn-sm text-white" data-toggle="modal" data-target="#exampleModal" >FeedBack</button>
      </div>
     
      
     
      </div>
   </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" >
        <h3 class="modal-title w-100 text-info">Your Feedback</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('admin/feedbackform') }}">
         {{ csrf_field() }}
      <div class="modal-body">
            <div class="row">
             <div class="col-md-12">
                     <div class="form-group">
                       
                       <textarea placeholder="Your FeedBack" class="form-control" rows="8"  name="f_comment" ></textarea>
                         
                    </div>
             </div>
             </div>
             
             
             <div class="text-center" style="margin-top:10px;">
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
       

      
   </body>     
    
     <div class="text-center footer" style="color:#000;">&copy Designed & Developed By Binod Thakur</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset(STATIC_DIR.'js/app.js') }}" defer></script>
  
  <!-- Button trigger modal -->
 
 <script type="text/javascript">

 </script>


  
</html>