<html>
<head>
<title>Anketa</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
	<div id="overlay">
		<div>
			<img src="loader.gif" width="64px" height="64px" />
		</div>
	</div>
	<div class="poll-content-outer">
		<div id="poll-content"></div>
	</div>

<script>
   function shfaqAnketen(){
		$.ajax({
			type: "POST", 
			url: "shfaqAnketen.php", 
			processData : false,
			beforeSend: function() {
				$("#overlay").show();
			},
			success: function(responseHTML){
				$("#overlay").hide();
				$("#poll-content").html(responseHTML);
			}
		});
	}
	function shtoAnketen() {
		if($("input[name='pergjigja']:checked").length != 0){
			var pergjigja = $("input[name='pergjigja']:checked").val();
			$.ajax({
				type: "POST", 
				url: "ruajAnketen.php", 
				data : "pyetja="+$("#pyetja").val()+"&pergjigja="+$("input[name='pergjigja']:checked").val(),
				processData : false,
				beforeSend: function() {
					$("#overlay").show();
				},
				success: function(responseHTML){
					$("#overlay").hide();	
					$("#poll-content").html(responseHTML);				
				}
			});
			
		}
	}
    $(document).ready(function(){
		shfaqAnketen();
	});
   </script>
</body>
</html>