<!DOCTYPE html>
<html>
<head>
	<title>Spectacle Orléans</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<header>
	<?php
	include "header.php"
	?>
	</header>

	<section>

<?php

include 'tableau.php';
//pour chaque élément de $agenda crée la variable $spectacle
foreach($agenda as $spectacle){
    //pour chaque élément de $spectacle crée la variable $element
    foreach($spectacle as $element){
    //écris le $element sur la même ligne avec un tiret et des espaces
        echo '- '.$element.' <br/>  ';
    }
    //A chaque nouveau $spectacle, saute une ligne
    echo'<br/>';
}
?>

	</section>

	<footer>
	<?php
	include "footer.php"
	?>

	</footer>


</body>
</html>





