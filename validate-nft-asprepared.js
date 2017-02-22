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












    Sugar_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Unit_S').val().length > 0;
        }}

},  
    Sugar_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Amount_S').val().length > 0;
        }}

},

    Sugar_Alcohols_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Alcohols_Unit_S').val().length > 0;
        }}

},  
    Sugar_Alcohols_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Sugar_Alcohols_Amount_S').val().length > 0;
        }}

},

    Starch_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Starch_Unit_S').val().length > 0;
        }}

},  
    Starch_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Starch_Amount_S').val().length > 0;
        }}

},

    Cholesterol_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Cholesterol_Unit_S').val().length > 0;
        }}

},  
    Cholesterol_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Cholesterol_Amount_S').val().length > 0;
        }}

},
    Sodium_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Sodium_Unit_S').val().length > 0;
        }}

},  
    Sodium_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Sodium_Amount_S').val().length > 0;
        }}

},

    Potassium_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Potassium_Unit_S').val().length > 0;
        }}

},  
    Potassium_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Potassium_Amount_S').val().length > 0;
        }}

},

    Calcium_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Calcium_Unit_S').val().length > 0;
        }}

},  
    Calcium_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Calcium_Amount_S').val().length > 0;
        }}

},

    Iron_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Iron_Unit_S').val().length > 0;
        }}

},  
    Iron_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Iron_Amount_S').val().length > 0;
        }}

},

    VitaminA_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminA_Unit_S').val().length > 0;
        }}

},  
    VitaminA_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminA_Amount_S').val().length > 0;
        }}

},

    VitaminC_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminC_Unit_S').val().length > 0;
        }}

},  
    VitaminC_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminC_Amount_S').val().length > 0;
        }}

},

    VitaminD_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminD_Unit_S').val().length > 0;
        }}

},  
    VitaminD_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminD_Amount_S').val().length > 0;
        }}

},

    VitaminE_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminE_Unit_S').val().length > 0;
        }}

},  
    VitaminE_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminE_Amount_S').val().length > 0;
        }}

},

    VitaminK_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminK_Unit_S').val().length > 0;
        }}

},  
    VitaminK_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminK_Amount_S').val().length > 0;
        }}

},
    Thiamine_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Thiamine_Unit_S').val().length > 0;
        }}

},  
    Thiamine_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Thiamine_Amount_S').val().length > 0;
        }}

},
    Riboflavin_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Riboflavin_Unit_S').val().length > 0;
        }}

},  
    Riboflavin_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Riboflavin_Amount_S').val().length > 0;
        }}

},

    Niacin_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Niacin_Unit_S').val().length > 0;
        }}

},  
    Niacin_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Niacin_Amount_S').val().length > 0;
        }}

},
   
    VitaminB6_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB6_Unit_S').val().length > 0;
        }}

},  
    VitaminB6_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB6_Amount_S').val().length > 0;
        }}

},

    Folate_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Folate_Unit_S').val().length > 0;
        }}

},  
    Folate_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Folate_Amount_S').val().length > 0;
        }}

},

    VitaminB12_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB12_Unit_S').val().length > 0;
        }}

},  
    VitaminB12_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB12_Amount_S').val().length > 0;
        }}

},
    Biotin_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Biotin_Unit_S').val().length > 0;
        }}

},  
    Biotin_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Biotin_Amount_S').val().length > 0;
        }}

},
    Choline_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Choline_Unit_S').val().length > 0;
        }}

},  
    Choline_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Choline_Amount_S').val().length > 0;
        }}

},

    Pantothenate_Amount_S : {   

         required: {
             
             depends: function(element){
          return $('#Pantothenate_Unit_S').val().length > 0;
        }}

},  
    Pantothenate_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Pantothenate_Amount_S').val().length > 0;
        }}

},
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
