jQuery(function($){
	console.info("DOM Loaded");
	
	$("#registrationForm").on({
		submit:function(){
			var data = $(this).serialize();
			$.ajax({
				url:"process.php",
				data:data,
				success:function(data){
					$("#registrationForm")[0].reset();
					alert(data);
					return false;
				}
			})
			return false;
		}		
	})
	
})