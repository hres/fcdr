$(document).ready(function(){


$("#vids-search-form").validate({
 
   rules: {
CNF_CODE : {
    number: true
},
Cluster_Number : {
    number: true
}

   },
    messages: {
    //Collection_Date: "Enter the correct date format" Cluster_Number
    }

});


});