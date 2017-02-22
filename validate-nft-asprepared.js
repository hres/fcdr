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












    Phosphorus_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Phosphorus_Unit_S').val().length > 0;
        }}

},  
    Phosphorus_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Phosphorus_Amount_S').val().length > 0;
        }}

},
    Iodide_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Iodide_Unit_S').val().length > 0;
        }}

},  
    Iodide_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Iodide_Amount_S').val().length > 0;
        }}

},

    Magnesium_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Magnesium_Unit_S').val().length > 0;
        }}

},  
    Magnesium_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Magnesium_Amount_S').val().length > 0;
        }}

},

    Zinc_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Zinc_Unit_S').val().length > 0;
        }}

},  
    Zinc_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Zinc_Amount_S').val().length > 0;
        }}

},

    Selenium_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Selenium_Unit_S').val().length > 0;
        }}

},  
    Selenium_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Selenium_Amount_S').val().length > 0;
        }}

},

    Copper_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Copper_Unit_S').val().length > 0;
        }}

},  
    Copper_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Copper_Amount_S').val().length > 0;
        }}

},

    Manganese_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Manganese_Unit_S').val().length > 0;
        }}

},  
    Manganese_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Manganese_Amount_S').val().length > 0;
        }}

},

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
