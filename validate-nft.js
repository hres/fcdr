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
 Trans_Fat_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Trans_Fat_Amount').val().length > 0;
        }}

},
    Saturated_Plus_Trans_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Saturated_Plus_Trans_UofM').val().length > 0;
        }}

},  
    Saturated_Plus_Trans_UofM : {   

         required: {
             
             depends: function(element){
          return $('#Saturated_Plus_Trans_Amount').val().length > 0;
        }}

},

    Saturated_Fat_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Saturated_Fat_Unit').val().length > 0;
        }}

},  
    Saturated_Fat_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Saturated_Fat_Amount').val().length > 0;
        }}

},

    Polyunsaturated_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Polyunsaturated_Unit').val().length > 0;
        }}

},  
    Polyunsaturated_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Polyunsaturated_Amount').val().length > 0;
        }}

},
    Omega6_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Omega6_Unit').val().length > 0;
        }}

},  
    Omega6_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Omega6_Amount').val().length > 0;
        }}

},
    Omega3_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Omega6_Unit').val().length > 0;
        }}

},  
    Omega3_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Omega6_Amount').val().length > 0;
        }}

},


    },
    messages: {

    }


});


});
