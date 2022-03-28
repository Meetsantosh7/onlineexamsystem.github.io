<script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset(STATIC_DIR.'backend/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset(STATIC_DIR.'backend/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset(STATIC_DIR.'backend/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/morrisjs/morris.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Calendar JavaScript -->
<script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/moment/moment.js')}}"></script>
<script src='{{asset(STATIC_DIR.'backend/plugins/bower_components/calendar/dist/fullcalendar.min.js')}}'></script>
<script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/calendar/dist/cal-init.js')}}"></script>
    <!-- Custom Theme JavaScript -->
<script src="{{asset(STATIC_DIR.'backend/js/custom.min.js')}}"></script>
<script src="{{asset(STATIC_DIR.'backend/js/dashboard1.js')}}"></script>
    <!-- Custom tab JavaScript -->
<script src="{{asset(STATIC_DIR.'backend/js/cbpFWTabs.js')}}"></script>
<script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>

<script type="{{asset(STATIC_DIR.'backend/text/javascript')}}">
    (function() {
        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();
    </script>
    {{-- <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script> --}}
    <!--Style Switcher -->
    <script src="{{asset(STATIC_DIR.'backend/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="{{asset(STATIC_DIR.'backend/js/nepalidatepicker.js')}}"></script>
<script src="{{asset(STATIC_DIR.'backend/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset(STATIC_DIR.'backend/js/wickedpicker.js')}}"></script>
<!-- <script src="{{asset(STATIC_DIR.'backend/ckeditor/ckeditor.js')}}"></script> -->
{{-- <script src="{{asset(STATIC_DIR.'backend/js/bootstrap.min.js')}}"></script> --}}
<script src="{{asset(STATIC_DIR.'backend/js/bootstrap-multiselect.js')}}"></script>



<!-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->

<!-- <script src="https://www.wiris.net/demo/editor/editor"></script> -->




<script>
    $("#date1").on('click',function(){
               $('#date1').remove();
            });
    $(".bod-picker").nepaliDatePicker({
                dateFormat: "%D, %M %d, %y",
                closeOnDateSelect:true
                //minDate : "सोम, जेठ १०, २०७३",
                //maxDate : "मंगल, जेठ ३२, २०७३"
    });
</script>
<script>
   
  $('#myTable').DataTable();
    
</script>







