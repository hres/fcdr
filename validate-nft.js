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
    Sodium_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Sodium_Unit').val().length > 0;
        }}

},  
    Sodium_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Sodium_Amount').val().length > 0;
        }}

},

    Potassium_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Potassium_Unit').val().length > 0;
        }}

},  
    Potassium_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Potassium_Amount').val().length > 0;
        }}

},

    Calcium_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Calcium_Unit').val().length > 0;
        }}

},  
    Calcium_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Calcium_Amount').val().length > 0;
        }}

},

    Iron_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Iron_Unit').val().length > 0;
        }}

},  
    Iron_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Iron_Amount').val().length > 0;
        }}

},

    VitaminA_Amount : {   

         required: {
             
             depends: function(element){
          return $('#VitaminA_Unit').val().length > 0;
        }}

},  
    VitaminA_Unit : {   

         required: {
             
             depends: function(element){
          return $('#VitaminA_Amount').val().length > 0;
        }}

},

    VitaminC_Amount : {   

         required: {
             
             depends: function(element){
          return $('#VitaminC_Unit').val().length > 0;
        }}

},  
    VitaminC_Unit : {   

         required: {
             
             depends: function(element){
          return $('#VitaminC_Amount').val().length > 0;
        }}

},

    VitaminD_Amount : {   

         required: {
             
             depends: function(element){
          return $('#VitaminD_Unit').val().length > 0;
        }}

},  
    VitaminD_Unit : {   

         required: {
             
             depends: function(element){
          return $('#VitaminD_Amount').val().length > 0;
        }}

},

    VitaminE_Amount : {   

         required: {
             
             depends: function(element){
          return $('#VitaminE_Unit').val().length > 0;
        }}

},  
    VitaminE_Unit : {   

         required: {
             
             depends: function(element){
          return $('#VitaminE_Amount').val().length > 0;
        }}

},

    VitaminK_Amount : {   

         required: {
             
             depends: function(element){
          return $('#VitaminK_Unit').val().length > 0;
        }}

},  
    VitaminK_Unit : {   

         required: {
             
             depends: function(element){
          return $('#VitaminK_Amount').val().length > 0;
        }}

},
    Thiamine_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Thiamine_Unit').val().length > 0;
        }}

},  
    Thiamine_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Thiamine_Amount').val().length > 0;
        }}

},
    Riboflavin_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Riboflavin_Unit').val().length > 0;
        }}

},  
    Riboflavin_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Riboflavin_Amount').val().length > 0;
        }}

},

    Niacin_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Niacin_Unit').val().length > 0;
        }}

},  
    Niacin_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Niacin_Amount').val().length > 0;
        }}

},
   
    VitaminB6_Amount : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB6_Unit').val().length > 0;
        }}

},  
    VitaminB6_Unit : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB6_Amount').val().length > 0;
        }}

},

    Folate_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Folate_Unit').val().length > 0;
        }}

},  
    Folate_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Folate_Amount').val().length > 0;
        }}

},

    VitaminB12_Amount : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB12_Unit').val().length > 0;
        }}

},  
    VitaminB12_Unit : {   

         required: {
             
             depends: function(element){
          return $('#VitaminB12_Amount').val().length > 0;
        }}

},
    Biotin_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Biotin_Unit').val().length > 0;
        }}

},  
    Biotin_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Biotin_Amount').val().length > 0;
        }}

},
    Choline_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Choline_Unit').val().length > 0;
        }}

},  
    Choline_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Choline_Amount').val().length > 0;
        }}

},

    Pantothenate_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Pantothenate_Unit').val().length > 0;
        }}

},  
    Pantothenate_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Pantothenate_Amount').val().length > 0;
        }}

},
    Phosphorus_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Phosphorus_Unit').val().length > 0;
        }}

},  
    Phosphorus_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Phosphorus_Amount').val().length > 0;
        }}

},
    Iodide_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Iodide_Unit').val().length > 0;
        }}

},  
    Iodide_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Iodide_Amount').val().length > 0;
        }}

},

    Magnesium_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Magnesium_Unit').val().length > 0;
        }}

},  
    Magnesium_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Magnesium_Amount').val().length > 0;
        }}

},

    Zinc_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Zinc_Unit').val().length > 0;
        }}

},  
    Zinc_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Zinc_Amount').val().length > 0;
        }}

},

    Selenium_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Selenium_Unit').val().length > 0;
        }}

},  
    Selenium_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Selenium_Amount').val().length > 0;
        }}

},

    Copper_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Copper_Unit').val().length > 0;
        }}

},  
    Copper_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Copper_Amount').val().length > 0;
        }}

},

    Manganese_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Manganese_Unit').val().length > 0;
        }}

},  
    Manganese_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Manganese_Amount').val().length > 0;
        }}

},

    Chromium_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Chromium_Unit').val().length > 0;
        }}

},  
    Chromium_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Chromium_Amount').val().length > 0;
        }}

},
     Molybdenium_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Molybdenium_Unit').val().length > 0;
        }}

},  
    Molybdenium_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Molybdenium_Amount').val().length > 0;
        }}

},  
     Chloride_Amount : {   

         required: {
             
             depends: function(element){
          return $('#Chloride_Unit').val().length > 0;
        }}

},  
    Chloride_Unit : {   

         required: {
             
             depends: function(element){
          return $('#Chloride_Amount').val().length > 0;
        }}

}, 
    },
    messages: {

    }


});


});
