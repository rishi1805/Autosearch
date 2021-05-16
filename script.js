function fill(Value) {
   
   $('#search').val(Value);
   
   $('#display').hide();
}
$(document).ready(function() {
   
   $("#search").keyup(function() {
       
       var Products = $('#search').val();
       
       if (Products == "") {
           
           $("#display").html("");
       }
       
       else {
    
           $.ajax({
               //AJAX type is "Post".
               type: "POST",
               //Data will be sent to "ajax.php".
               url: "ajax.php",
               
               data: {
                   
                   search: Products
               },
               
               success: function(html) {
                   
                   $("#display").html(html).show();
               }
           });
       }
   });
}); 