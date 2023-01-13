$(document).ready(function() {

	$("#form").on("submit", function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Email envoyé");
			$("#form").trigger("reset");
		});
		return false;
	});
	
});