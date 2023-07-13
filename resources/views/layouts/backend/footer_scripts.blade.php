

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('backend/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- PAGE SCRIPTS -->
<script src="{{asset('backend/dist/js/pages/dashboard2.js')}}"></script>

	// {{-- batatables --}}
  <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>		
  <script src="{{asset('backend/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('backend/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js') }}"></script> 
<script src="{{asset('backend/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js') }}"></script>   
<script src="{{asset('backend/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js') }}"></script>    
<script src="{{asset('backend/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js') }}"></script>    
<script src="{{asset('backend/extras/TableTools/JSZip-2.5.0/jszip.min.js') }}"></script>


<!-- Summernote -->

<script src="{{asset('backend/summernote/summernote.js') }}"></script>

  <script>
    $(function () {
    $("#sections").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#categories").DataTable();
    });
  </script>

<script type="text/javascript">
   
  $(document).on('click','.reject-modal',function(){

   

   var head=$(this).attr('data-title');
          
       var url=$(this).attr("data-url");
        $("#load-category-details").html("");
        $("#my-header").html(" ");
        $("#my-header").html(head);
        $("#category-modal").modal("show");
    $("#load-category-details").load(url,function(data){
    $("#category-modal").modal("show");
     
  });
});
</script>

<script>
  setTimeout(function(){
  $('#alert').slideUp();
    },3000)
   </script>

