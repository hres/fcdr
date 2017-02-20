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
        date1: {
      
         required: {
             
             depends: function(element){
          return $('#date2').val().length > 0;
        }}

},

      date2 : {
      
         required: {
             
             depends: function(element){
          return $('#date1').val().length > 0;
        }}

},
        dateFrom: {
      
         required: {
             
             depends: function(element){
          return $('#dateTo').val().length > 0;
        }}

},

      dateTo : {
      
         required: {
             
             depends: function(element){
          return $('#dateFrom').val().length > 0;
        }}

}
        

    },
    messages: {
        Dollar_Rank_From: "Fill in this value", 
        Dollar_Rank_To: "Fill in this value",
        dateTo: "", 
        dateFrom: "", 
        date1: "",
        date2: ""
    }


});


});
