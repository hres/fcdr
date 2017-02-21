$.validator.addMethod( "myDateFormat", function(value, element) {
	var re = /^\d{4}\/\d{1,2}\/\d{1,2}$/;

	// valid if optional and empty OR if it passes the regex test
	return (this.optional(element) && value == "") || re.test(value);
});

$(document).ready(function() {
	$("#vids-search-form1").validate({
			rules: {
				date1: {
					required: true,
					date: true
				}
			},
			messages: {
				Collection_Date: "Required Date Format: YYYY/MM/DD"
			}
	});
});
