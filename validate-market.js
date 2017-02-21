$(document).ready(function() {
	$("#vids-search-form1").validate({
			rules: {
				date1: {
					required: true,
					date: true
				}
			}
	});
});
