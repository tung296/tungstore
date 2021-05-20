@extends('layouts.index')
@section('content')
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2>Create New Product</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
{!! Form::model($product, ['method' => 'PATCH','files' => 'true','route' => ['products.update', $product->id]]) !!}
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Name:</strong>
         {!! Form::text('name', $product->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
      <div class="form-group">
         <strong>Import Price:</strong>
         {!! Form::number('import_price', $product->import_price, array('placeholder' => 'Import_price','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
      <div class="form-group">
         <strong>Price:</strong>
         {!! Form::number('price', $product->price, array('placeholder' => 'Price','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
      <div class="form-group">
         <strong>Amount:</strong>
         {!! Form::number('amount', $product->amount, array('placeholder' => 'Amount','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-6 col-sm-6 col-md-6">
      <div class="form-group">
         <strong>Sku:</strong>
         {!! Form::text('sku', $product->sku, array('placeholder' => 'Sku','class' => 'form-control')) !!}
      </div>
   </div>
   
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Summary:</strong>
         {!! Form::text('summary', $product->summary, array('placeholder' => 'Summary','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <label style="
            display: block;
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            font-weight: bolder;
            color: #585858;
            text-align: inherit;
            " for="Status">Status</label>
         <select name="status" multiple="" class="form-control" id="Status">
            <option {{ $product->status=='1'?'selected':'' }} value="1">New</option>
            <option {{ $product->status=='2'?'selected':'' }} value="2">Secondhand</option>
         </select>
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <label style="
            display: block;
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            font-weight: bolder;
            color: #585858;
            text-align: inherit;
            " for="Category">Category</label>
         <select name="category_id" multiple="" class="form-control" id="Category">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id==$product->category_id?'selected':'' }}>{{ $category->name }}</option>
            @endforeach

         </select>
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
        @foreach($product->images as $img)
        <div class="col-md-2">
            <img class="item_img rounded " src="storage/{{ $img }}" title="{{ $img }}'" alt="{{ $img }}">
            <label class="name_image_modal">{{ $img }}</label>
        </div>
        @endforeach
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Parameter:</strong>
         <textarea id="editor2" name="parameter" cols="80" rows="10">
             {{ $product->parameter }}
         </textarea>
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Des:</strong>
         <textarea id="editor1" name="des" cols="80" rows="10">
             {{ $product->des }}
         </textarea>
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
   </div>
</div>
<div id="bg_modal" class="modal-backdrop fade show" style="display: none;"></div>
{!! Form::close() !!}
@endsection
@section('js')
<script>
   $('#myModal').on('shown.bs.modal', function () {
       $('#myInput').trigger('focus')
   });
   $('#close_modal').click(function(){
       var html1 = "";
       $( "[type=checkbox]" ).each(function( index ) {
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
       $( "[type=checkbox]" ).each(function( index ) {
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
               var arr = [
                    @foreach ($product->images as $item)
                        "{{ $item }}", 
                    @endforeach
                    ];
            //    console.log(arr);
               $.each(data, function (index, value) {
                   var checked = "";
                    $.each(arr, function (index1, value1) {
                        if(value1==value) checked = "checked";
                    });
                   string="";
                   string+="<div class='col-md-2 ml-auto'>";
                   string+="<input "+checked+" type='checkbox' name='image[]' value='"+String(value)+"'>";
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
@endsection