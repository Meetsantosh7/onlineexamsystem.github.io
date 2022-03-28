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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset(STATIC_DIR.'backend/plugins/images/cracksee.png')}}">
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
   
        
       

      <div class="container">

    
      <div class="col-md-12 col-sm-12">
         <div class="row mt-2">
          <div class="col-md-6 col-sm-6">
            <div class="text-left">
              @if(isset($start_time))
             <h5 style="color:green;">Start Time: {{ date("g:i A",strtotime($start_time)) }}</h5>
             @endif
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="text-right">
             <h5 id="demo" style="color:red;"></h5>
            </div>
          </div>
           
      </div>
      </div>
       
      @if(isset($questions) && count($questions)>0)
         
       <div class="text-center text-white mt-4 mb-4">

        <h1 style="display:inline;background-color:black;padding:2px 5px;">Quiz Contest</h1>
      </div>
      <form action="{{route('admin/question/user_answers')}}" method="post" id="form_id">
      {{ csrf_field() }}
      <input type="hidden" name="user_id" value="{{(Auth::user()->id)}}">
      <input type="hidden" name="exam_id" value="{{$exam_id}}">

      @foreach ( $questions as $k=> $element)
               <div class="row">
                <div class="col-md-12">
                <h1><span class="text-success">Q.{{$k+1}}</span> {{$element->q_text}}</h1>
                <input type="hidden" name="questions_{{$k}}" value="{{$element->q_id}}">
                <input type="hidden" name="answers_{{$k}}" value="{{0}}">
              
                 @foreach ($element->manyanswers->shuffle()->take(4) as $key=>$element)
                   
                  <div>
                  <input type="radio" name="answers_{{$k}}" value="{{$element->ans_id}}"> <label>{{$element->answers}}</lablel>
                  </div>
             

                  
                 @endforeach
               
                </div>
                </div>
        @endforeach
        <input type="hidden" name="total_question" value="{{count($questions)}}">
         <input type="submit" class="btn btn-success" value="Submit">
        </form>

       
        
        @endif

         @if(isset($session))
          <div class="text-center mt-4">
          <h1  class="text-center  mt-30" >{{ $session }}</h1>
          </div>
        @endif

        
        

        
      @if(isset($exam_attempted))
      <div class="text-center mt-4">
      <h1 class="text-center" >{{ $exam_attempted }}</h1>
      </div>
      @endif

      @if(isset($no_schedule))
      <div class="text-center mt-4">
      <h1 class="text-center ">{{ $no_schedule }}</h1>
      </div>
      @endif

      
         
   </div>
 

     <div class="text-center" style="color:#000;">&copy Designed & Developed By Binod Thakur</div> 
   </body>     
    
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{ asset(STATIC_DIR.'js/app.js') }}" defer></script>
@if(isset($end_time) || isset($start_time))
 <script>
// Set the date we're counting down to


var date="<?php echo date('M j,Y') ?>";

@if(isset($start_time))
var time="<?php echo $start_time; ?> :00";
@endif

@if(isset($end_time))
var time="<?php echo $end_time; ?> :00";
@endif




var concate_date=date+" "+time;

var countDownDate = new Date(concate_date).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds

  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
   @if(isset($end_time))
   document.getElementById('form_id').submit();
   @endif
   @if(isset($start_time))
     window.location.href = "{{URL::to('student')}}";
   @endif
  }
}, 1000);
</script>
      @endif

  
  <!-- Button trigger modal -->


  
</html>