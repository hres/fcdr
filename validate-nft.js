$(document).ready(function(){


$("#vids-search-form").validate({

    rules: {


        Energy_kj_Amount: {

         required: {
             
             depends: function(element){
          return $('#Energy_kj_Unit').val().length > 0;
        }}

},

      Energy_kj_Unit : {
    
         required: {
             
             depends: function(element){
          return $('#Energy_kj_Amount').val().length > 0;
        }}

},
 Trans_Fat_Amount : {

         required: {
             
             depends: function(element){
          return $('#Trans_Fat_Unit').val().length > 0;
        }}

},
     

    },
    messages: {

    }


});


});
