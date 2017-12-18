<!DOCTYPE html>
<html lang="en/us/nl">

<head>
	 <script src="https://use.fontawesome.com/6cf3c4b1ed.js"></script>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	 <!-- This wil scale the fontsize so high res mobile users won´t have to squint -->
	 <link href="style.css" rel="stylesheet">

<title>WoofMeow oefening in PHP</title>
</head>
<body>
<div>

	 <?php
	 	 	var x= 1;
	 			for (; $x < 101;){
				document.write ( $x + ", ");
				x++;


				if ($x%15==0){
 				    echo "WoofMeow<br>";
 }
 				else if ($x%3==0){
 				          echo "Woof<br>";
 }
 				else if ($x%5==0){
 				          echo "Meow<br>";
}
				else{
 				           echo $x;}
 }
?>


</div>
</body>
</html>
