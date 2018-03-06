<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=workt', "mysql", "mysql");

	$sql = "SELECT * FROM colors";
    $res = $pdo->query($sql);
    $res = $res->fetchAll();

    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test task</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-">
				<?php 
					foreach ($res as $colors) {
						echo "<input id='".$colors['color']."' class='btn' type='submit' style='background-color: ".$colors['color'].";'><br>";
    				}
				 ?>		
			</div>
		</div>
	</div>
	

	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<script>
		$( document ).ready(function() {

		    $(".btn").click(function() {

		    	var color = $(this).css('background-color');

		    	if(color != "rgb(0, 128, 0)") {

		    		$("body").css('background-color',color);
		    		$(this).css('background-color','green');

		    	}else {

		    		color = $(this).attr('id');
		    		$("body").css('background-color','white');
		    		$(this).css('background-color', color);
		    	}
		    });

		});
	</script>
</body>
</html>