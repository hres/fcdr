$.validator.addMethod( "myDateFormat", function(value, element) {
	var re = /^\d{4}\/\d{1,2}\/\d{1,2}$/;

	// valid if optional and empty OR if it passes the regex test
	return (this.optional(element) && value == "") || re.test(value);
});

$(document).ready(function(){


$("#vids-search-form").validate({

    rules: {


        Energy_kj_Amount: {
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
  number: true, 
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
     PPD_Per_Serving_Amount : {   
  number: true, 
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
             Energy_Amount_S: {
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Energy_Unit_S').val().length > 0;
        }}

},

      Energy_Unit_S : {
    
         required: {
             
             depends: function(element){
          return $('#Energy_Amount_S').val().length > 0;
        }}

},
  Energy_Amount_kj_S: {
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Energy_Unit_kj_S').val().length > 0;
        }}

},

      Energy_Unit_kj_S : {
    
         required: {
             
             depends: function(element){
          return $('#Energy_Amount_kj_S').val().length > 0;
        }}

},
  Saturated_Trans_Amount_S : {   
  number: true, 
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


Saturated_Fat_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Saturated_Fat_Unit_S').val().length > 0;
        }}

},  
    Saturated_Fat_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Saturated_Fat_Amount_S').val().length > 0;
        }}

},

 Trans_Fat_Amount_S : {
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Trans_Fat_Unit_S').val().length > 0;
        }}

},
 Trans_Fat_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Trans_Fat_Amount_S').val().length > 0;
        }}

},  
   Polyunsaturated_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Polyunsaturated_Unit_S').val().length > 0;
        }}

},  
    Polyunsaturated_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Polyunsaturated_Amount_S').val().length > 0;
        }}

},


    Omega6_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Omega6_Unit_S').val().length > 0;
        }}

},  
    Omega6_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Omega6_Amount_S').val().length > 0;
        }}

},

    Fat_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Fat_Unit_S').val().length > 0;
        }}

},  
    Fat_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Fat_Amount_S').val().length > 0;
        }}

},
   
    Omega3_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Omega3_Unit_S').val().length > 0;
        }}

},  
    Omega3_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Omega3_Amount_S').val().length > 0;
        }}

},
  

    Monounsaturated_Amount_S : {   
    number: true, 
         required: {
             
             depends: function(element){
          return $('#Monounsaturated_Unit_S').val().length > 0;
        }}

},  
    Monounsaturated_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Monounsaturated_Amount_S').val().length > 0;
        }}

},


    Carbohydrates_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Carbohydrates_Unit_S').val().length > 0;
        }}

},  
    Carbohydrates_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Carbohydrates_Amount_S').val().length > 0;
        }}

},

    Fibre_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Fibre_Unit_S').val().length > 0;
        }}

},  
    Fibre_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Fibre_Amount_S').val().length > 0;
        }}

},

    Soluble_Fibre_Amount_S : {   
  number: true, 
         required: {
             
             depends: function(element){
          return $('#Soluble_Fibre_Unit_S').val().length > 0;
        }}

},  
    Soluble_Fibre_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Soluble_Fibre_Amount_S').val().length > 0;
        }}

},

    Insoluble_Fibre_Amount_S : {   
    number: true, 
         required: {
             
             depends: function(element){
          return $('#Insolube_Fibre_Unit_S').val().length > 0;
        }}

},  
    Insolube_Fibre_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Insoluble_Fibre_Amount_S').val().length > 0;
        }}

},



    Sugar_Amount_S : {   
    number: true, 
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
        number: true, 
        
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

 Package_Size : {   

         number: true

},
 Number_Of_Units : {   

         number: true

},
				Collection_Date: {
					required: true,
					date: true
				},




    Starch_Amount_S : {   
    number: true,
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
    number: true,
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
    number: true,
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
    number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
number: true,
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
    number: true,
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
number: true,
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
number: true,
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
     Protein_Amount_S : {   
number: true,
         required: {
             
             depends: function(element){
          return $('#Protein_Unit_S').val().length > 0;
        }}

},

 Protein_Unit_S : {   

         required: {
             
             depends: function(element){
          return $('#Protein_Amount_S').val().length > 0;
        }}

},
 Per_Serving_Amount_In_Grams : {   
    number: true
   

},
 Per_Serving_Amount_In_Grams_PPD : {   
    number: true
   
//
},
 Per_Serving_Amount : {   
    number: true,
   required: true
//
},
  },
    messages: {
    Collection_Date: "Enter the correct date format"
    }


});


});

