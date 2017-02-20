$(document).ready(function(){

$("#vids-search-form1").validate({

    rules: {

        Dollar_Rank_To: {

         required: {
             
             depends: function(element){
          return $('#Dollar_Rank_From').val().length > 0;
        }}

},

      Dollar_Rank_From : {
    
         required: {
             
             depends: function(element){
          return $('#Dollar_Rank_To').val().length > 0;
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




