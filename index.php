
<!DOCTYPE html>
<html lang="en/us/nl">

<head>
	 <script src="https://use.fontawesome.com/6cf3c4b1ed.js"></script>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	 <!-- This wil scale the fontsize so high res mobile users won´t have to squint -->
	 <link href="style.css" rel="stylesheet">
	 <style>
	 *{
	 	margin: 0;
	 	padding: 12px;

	 }
	 @import url('https://fonts.googleapis.com/css?family=Khula');

	 html {
	 	margin: 0;
	 	padding: 0;
	 }
	 body {
	 	width: 50%;
	 	height: auto;
	 	color: white;
	 	background-color:#333;
	 	margin-top: 15px;
	 	padding: 5px;
	 	font-family: 'Khula', sans-serif;
	 	font-size: 12pt;
	 	color: white;}

	 div{
	 	width: 50%;
	 	height: auto;
	 	margin-left: 15px;
	 	padding: 15px;
	 	background-color: #AC1032;
	 	color: #FFFFFF;
	 	font-family: 'Khula', sans-serif;
	 	font-size: 12pt;}

	 </style>


<title>WoofMeow oefening in PHP</title>

</head>
<body>

	<div>
<h3>Oefening in PHP -- WoofMeow</h3>


<?php>

	 $x= 0;
		 for (; $x < 100;){
		 $x++;

		 if ($x%15==0){
				 echo "WOOFMEOW<br />";
		}
		 else if ($x%3==0){
							 echo "WOOF<br />";
		}
		 else if ($x%5==0){
							 echo "MEOW<br />";
}
else {
	echo $x . "<br />";

}
}



?>

</div>
</body>
<footer><font size="1"><i class="fa fa-copyright" aria-hidden="true"></i> Rienk Bezema 2017 </font></footer>

</html>
