$(document).ready(function($) {   
    var old_qty = $(".changeqty").val(); 
    $(".changeqty").change(function() {
        var parent = $(this).parent().parent().parent();
        var id = $(this).data("id");
        var qty = $(this).val();
        var money = $(this).parent().parent().find('.price').text().replaceAll(',','').replace('₫','');
        var totail = $('#totail').html().replaceAll(',','').replace('₫','');
        var new_totail = parseInt(totail)+(parseInt(money)*(parseInt(qty)-parseInt(old_qty)));
        $.ajax({url: "changeqty/"+id+"/"+qty, success: function(result){
            // if(qty <= 0){
            //     parent.remove();
            //     console.log(new_totail);
            //     $('#totail').html(new_totail);
            // }
            location.reload();
        	// alert('ok');
        }});
        // old_qty = $(".changeqty").val(); 
    });
    setTimeout(function(){
        var menu = $(".header-bottom").find('.active');
        for(var i=menu.length-1; i>0; i--){
            console.log($(menu[i]))
            $(menu[i]).removeClass( "active" );
        }
       }, 1000);
})
window.onload = function () { 

}