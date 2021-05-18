<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="assets/ckeditor/ckeditor.js"></script>
      <script>
         $(document).ready(function(){
           var funcNum = <?php echo $_GET['CKEditorFuncNum'].';';?>
           $('.item_img').on('click',function(){
                var fileUrl = $(this).attr('title');
                window.opener.CKEDITOR.tools.callFunction( funcNum, fileUrl);
                window.close();
           });
           $('.btn_delete').on('click',function(){
               var element = $(this).parent();
            var fileName = $(this).find("img").attr("title");
            console.log(fileName);
            var r = confirm("Agree to delete!");
            if (r == true) {
                $.ajax({
                    url: "{{asset('del-ckeditor')}}"+"/"+fileName, 
                    success: function(result){
                        element.remove();
                    }
                });
            }
           });
         });
      </script>
      <style>
        .item_image {
            position: relative;
            float: left;
        }
        img {
            width: 100%;
            height: 150px;
        }
        label {
            text-align: center;
            display: block;
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
        }
        .item_image:hover {
            background: #fb952578;
            color: #ffffff;
            cursor: pointer;
            transition-duration: .5s;
            transition-timing-function: linear;
            border-radius: 10%;
        }
        .btn_delete {
            position: absolute;
            right: 10%;
            top: 10%;
            z-index: 9;
        }
        .btn_delete img {
            width: 10%;
            height: 10%;
            display: block;
            float: right;
        }
      </style>
   </head>
   <body>
    <div class="container-fluid mt-3 mb-3">
        <div class="row" id="image_list">
            @foreach($fileNames as $fileName)
                <div class="item_image col-xl-2 col-md-4 col-sm-6 p-3">
                    <div class="btn_delete"><img src="{{asset('assets/images/delete.png')}}" title="{{$fileName}}" alt=""></div>
                    <img class="item_img" src="{{asset('storage/'.$fileName)}}" title ="{{asset('storage/'.$fileName)}}" alt="{{$fileName}}">
                    <label>{{$fileName}}</label>
                </div>
            @endforeach
        </div>
    </div>
   </body>
</html>