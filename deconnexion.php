<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Verification_connexion</title>
		<meta charset="UTF-8">
	</head>
	<body>	
	
		<?php 
				
		
		$_SESSION["statut"] = "deconnecté";
        header("Location: index.php");

		?>
	</body>
</html>