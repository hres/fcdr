$.validator.addMethod(
	"myDateFormat",
	function(value, element) {
		// yyyy/mm/dd
		var re = /^\d{4}\/\d{1,2}\/\d{1,2}$/;

		// valid if optional and empty OR if it passes the regex test
		return (this.optional(element) && value == "") || re.test(value);
});

$(document).ready(function() {
	$("#vids-search-form1").validate({
			rules: {
				Collection_Date: {
					required: true,
					date: true
				}
			},
			message: {
				Collection_Date: "wrong date format"
			}
	});
});
