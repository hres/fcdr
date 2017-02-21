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
          return $('#Omega3_Unit').val().length > 0;
        }}

},  
    Omega3_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Omega3_Amount').val().length > 0;
        }}

},
    Monounsaturated_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Monounsaturated_Unit').val().length > 0;
        }}

},  
    Monounsaturated_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Monounsaturated_Amount').val().length > 0;
        }}

},
    Carbohydrates_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Carbohydrates_Unit').val().length > 0;
        }}

},  
    Carbohydrates_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Carbohydrates_Amount').val().length > 0;
        }}

},

    Fibre_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Fibre_Unit').val().length > 0;
        }}

},  
    Fibre_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Fibre_Amount').val().length > 0;
        }}

},


    Soluble_Fibre_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Soluble_Fibre_Unit').val().length > 0;
        }}

},  
    Soluble_Fibre_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Soluble_Fibre_Amount').val().length > 0;
        }}

},



    Insoluble_Fibre_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Insoluble_Fibre_Unit').val().length > 0;
        }}

},  
    Insoluble_Fibre_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Insoluble_Fibre_Amount').val().length > 0;
        }}

},

    Sugar_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Unit').val().length > 0;
        }}

},  
    Sugar_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Amount').val().length > 0;
        }}

},

    Sugar_Alcohols_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Alcohols_Unit').val().length > 0;
        }}

},  
    Sugar_Alcohols_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Alcohols_Amount').val().length > 0;
        }}

},

    Starch_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Starch_Unit').val().length > 0;
        }}

},  
    Starch_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Starch_Amount').val().length > 0;
        }}

},

    Cholesterol_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Cholesterol_Unit').val().length > 0;
        }}

},  
    Cholesterol_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Cholesterol_Amount').val().length > 0;
        }}

},
    },
    messages: {

    }


});


});
