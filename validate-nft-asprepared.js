$(document).ready(function(){


$("#vids-search-form").validate({

    rules: {

/*

    Saturated_Trans_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Saturated_Trans_Unit_S').val().length > 0;
        }}

},  
    Saturated_Trans_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Saturated_Trans_Amount_S').val().length > 0;
        }}

},

 */   












    Chromium_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Chromium_Unit_S').val().length > 0;
        }}

},  
    Chromium_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Chromium_Amount_S').val().length > 0;
        }}

},
     Molybdenium_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Molybdenium_Unit_S').val().length > 0;
        }}

},  
    Molybdenium_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Molybdenium_Amount_S').val().length > 0;
        }}

},  
     Chloride_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Chloride_Unit_S').val().length > 0;
        }}

},  
    Chloride_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Chloride_Amount_S').val().length > 0;
        }}

}, 
     PPD_Per_Serving_Amount : {   

         required: {
             
             depends: function(element){
          return $('#PPD_Per_Serving_UofM').val().length > 0;
        }}

},  
    PPD_Per_Serving_UofM : {   

         required: {
             
             depends: function(element){
          return $('#PPD_Per_Serving_Amount').val().length > 0;
        }}

}, 
   
   
   
   
   
   
   
    },
    messages: {

    }


});


});
