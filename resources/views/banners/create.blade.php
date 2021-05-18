@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Banner</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('banners.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


{!! Form::open(array('route' => 'banners.store','method'=>'POST','files' => 'true')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Link:</strong>
            {!! Form::text('link', null, array('placeholder' => 'Link','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <!-- Button trigger modal -->
         <button id="btn_load_image" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Choose Image
         </button>
         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span id="close_modal1" aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="modal-body">
                        <div class="container-fluid">
                           <div id="ajax_html" class="row">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button id="close_modal" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div id="show_image" class="iq-card-body">
      </div>
   </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<script>
   $('#myModal').on('shown.bs.modal', function () {
       $('#myInput').trigger('focus')
   });
   $('#close_modal').click(function(){
       var html1 = "";
       $( "[type=radio]" ).each(function( index ) {
           if($(this).is(':checked')){
               var src = $(this).parent().find('img').attr('src');
               var alt = $(this).parent().find('img').attr('alt');
               string="";
               string+="<div class='col-md-2'>";
               string +="<img class='item_img rounded ' src='"+src+"' title ="+alt+"' alt="+alt+">";
               string +="<label class='name_image_modal'>"+alt+"</label></div>";
               html1+=string;
           }
       });
       $('#show_image').html(html1);
   });
   $('#close_modal1').click(function(){
       var html1 = "";
       $( "[type=radio]" ).each(function( index ) {
           if($(this).is(':checked')){
               var src = $(this).parent().find('img').attr('src');
               var alt = $(this).parent().find('img').attr('alt');
               string="";
               string+="<div class='col-md-2'>";
               string +="<img class='item_img rounded ' src='"+src+"' title ="+alt+"' alt="+alt+">";
               string +="<label class='name_image_modal'>"+alt+"</label></div>";
               html1+=string;
           }
       });
       $('#show_image').html(html1);
   });
   window.onload = function(){
      html="";
       $.ajax({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           type: 'GET',
           dataType: 'json',
           data: {
           },
           url: "/get_media/",
           success: function (data) {
               // console.log(data);
               $.each(data, function (index, value) {
                   // console.log(value);
                   string="";
                   string+="<div class='col-md-2 ml-auto'>";
                   string+="<input type='radio' name='image' value='"+String(value)+"'>";
                   string +="<img class='item_img' src='storage/"+value+"' title ="+String(value)+"' alt="+value+">";
                   string +="<label>"+String(value)+"</label></div>";
                   html+=string;
               });
               $('#ajax_html').html(html);
   
           },
           error:function(data){
               // $('#alert_error').css("display", "block");
               // $('#alert_success').css("display", "none");
               alert("Load Image Error");
           }
       });
   };
   
</script>
{!! Form::close() !!}


@endsection