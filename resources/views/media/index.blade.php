@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Banner Management</h2>
        </div>
        <div class="pull-right">
        @can('file-create')
            <form id="form_file" action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="input_file">
                <!-- <input type="submit" value="Upload"> -->
            </form>
            @endcan
        </div>
    </div>
</div>
<div id="alert_success" class="alert alert-success">
    <p>Delete image success</p>
</div>
<div id="alert_error" class="alert alert-danger">
    <p>Delete image error</p>
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

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif
<script>
    $(document).ready(function(){
        $('#input_file').change(function(){
            var form = document.querySelector('#form_file');
            var data = new FormData(form);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: $('#form').attr("action"),
                type: 'POST',
                dataType: "JSON",
                data: data,
                processData: false,
                contentType: false,
                success: function (data, status)
                {
                    location.reload();
                },
                error: function (xhr, desc, err)
                {
                    location.reload();
                }
            });        
        });
      $('.btn_delete').on('click',function(){
          var element = $(this).parent();
       var fileName = $(this).find("img").attr("title");
       console.log(fileName);
            swal({ 
               title: "Are you sure?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
               })
               .then((willDelete) => {
               if (willDelete) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        dataType: 'text',
                        data: {
                            _method: 'DELETE'
                        },
                        url: "/media/"+fileName,
                        success: function (data) {
                            if(data=="success"){
                                element.remove();
                                $('#alert_success').css("display", "block");
                                $('#alert_error').css("display", "none");
                                // alert(data);
                            }
                        },
                        error:function(data){
                            $('#alert_error').css("display", "block");
                            $('#alert_success').css("display", "none");
                            // alert("delete error");
                        }
                    });
               }
            });
        });
    });
 </script>

<div class="row" id="image_list">
    @foreach($fileNames as $fileName)
        <div class="item_image col-xl-2 col-md-4 col-sm-6 p-3">
            @can('file-create')
                <div class="btn_delete">
                    <img src="{{asset('assets/images/delete.png')}}" title="{{$fileName}}" alt="">
                </div>
            @endcan
            <img class="item_img" src="{{asset('storage/'.$fileName)}}" title ="{{asset('storage/'.$fileName)}}" alt="{{$fileName}}">
            <label>{{$fileName}}</label>
        </div>
    @endforeach
</div>





@endsection