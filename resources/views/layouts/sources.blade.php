<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <base href="{{asset('')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Server360 - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- DataTables CSS -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/custom.css">

      
      <!-- Ckeditor -->
      <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
      <script src="assets/ckeditor/ckeditor.js"></script>
      <script src="assets/ckfinder/ckfinder.js"></script>



      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
      @yield('head')
   </head>
   <body>
      <!-- loader Start -->
      @yield('body')
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- DataTables JavaScript -->
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="assets/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="assets/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="assets/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="assets/js/waypoints.min.js"></script>
      <script src="assets/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="assets/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="assets/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="assets/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="assets/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="assets/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="assets/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="assets/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="assets/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="assets/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="assets/js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="assets/js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="assets/js/worldLow.js"></script>
      <!-- Raphael-min JavaScript -->
      <script src="assets/js/raphael-min.js"></script>
      <!-- Morris JavaScript -->
      <script src="assets/js/morris.js"></script>
      <!-- Morris min JavaScript -->
      <script src="assets/js/morris.min.js"></script>
      <!-- Flatpicker Js -->
      <script src="assets/js/flatpickr.js"></script>
      <!-- Style Customizer -->
      <script src="assets/js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="assets/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="assets/js/custom.js"></script>
      <!-- Sweetalert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- Ckeditor -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>


      <script>
          CKEDITOR.replace( 'editor1',{
            filebrowserImageUploadUrl: "{{ url('upload-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl: "{{ url('upload-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form',
         });
         CKEDITOR.editorConfig = function( config )
         {
            config.height = '800px';
         };
         CKEDITOR.replace( 'editor2',{
            filebrowserImageUploadUrl: "{{ url('upload-ckeditor?_token='.csrf_token()) }}",
            filebrowserBrowseUrl: "{{ url('upload-browser?_token='.csrf_token()) }}",
            filebrowserUploadMethod: 'form',
         });
         CKEDITOR.editorConfig = function( config )
         {
            config.height = '800px';
         };
      </script>

      <script>
         $('#dataTables').DataTable({
            "pageLength": 5,
            "bLengthChange": true,
            "bPaginate": true,
            "bInfo": false,
            "responsive": true,
         });
         $('.delper').click((e) => {
            var parent = $(this);
            e.preventDefault(); 
            var $el = $(event.target); 
            var val = $el.data("id");
            let ur = $('#ur').val();
            console.log(parent);
            swal({ 
               title: "Are you sure?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
               })
               .then((willDelete) => {
               if (willDelete) {
                  let data = {
                     "_token": $('input[name=_token]').val(),
                     "id": val
                  };
                  console.log();
                  $.ajax({
                     headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                     type: "DELETE",
                     dataType: "json",
                     url: ur,
                     data: data,
                     success: function(result){
                        // parent.remove();
                     }
                  });
                        location.reload();
               }
            });
         })
      </script>
      


      <!-- <script type="text/javascript">

         Dropzone.autoDiscover = false;
      
         $(document).ready(function () {
              $("#id_dropzone").dropzone({
                  maxFiles: 2000,
                  url: "/ajax_file_upload_handler/",
                  success: function (file, response) {
                      console.log(response);
                  }
              });
         })
         
      </script> -->
      @yield('js')
   </body>
</html>