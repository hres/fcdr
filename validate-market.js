$.validator.addMethod( "myDateFormat", function(value, element) {
	var re = /^\d{4}\/\d{1,2}\/\d{1,2}$/;


	// valid if optional and empty OR if it passes the regex test
	return (this.optional(element) && value == ""  || re.test(value));// || re.test(value);
});

$(document).ready(function() {
	$("#vids-search-form1").validate({
			rules: {
				date1: {
					required: true,
					date: true
				},
				Dollar_Volume: {
    			number: true
   				
				}
				
				,
				Kilo_Vol: {
				required: true,
				number: true
				},
				Dollar_Rank: {
				required: true,
				number: true
				},
				Dollar_Volume_PerCentage_Change: {
				required: true,
				number: true
				},
				Kilo_Volume_Percent_Change: {
				required: true,
				number: true
				},
				Average_AC_Dist: {
				number: true
				},
				Average_Retail_Price: {
				number: true
				},
				Dollar_Volume_Total: {
				required: true,
				number: true
				},
				Kilo_Volume_Total: {
				required: true,
				number: true
				},
				Dollar_Share: {
				required: true,
				number: true
				},
				Kilo_Share: {
				required: true,
				number: true
				},
				Cluster_Number: {
				number: true
				},
				Kilo_Rank: {
				number: true
				},
				Sales_UPC: {
				required: true,
				digits: true,
				minlength: 10
				}, 
				Sales_Year: {
				digits: true,
				maxlength: 4,
				minlength:4
				}, 
			},
			
			messages: {
				Collection_Date: "Required Date Format: YYYY/MM/DD"
			}
	});
});
