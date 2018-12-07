<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Nuit de l'info 2018</title>
	<link rel="stylesheet" media="screen" href="authentication.css">
	<script type="text/javascript" src="Authentication.js"></script> 
</head>

<body>
	<?php

$errorMsg = "invald username and password";

?>
	<div class="page-wrapper">
		<header role="banner" >
			<ul class="ulMenu">
			<h1> Nuit de l'info 2018 </h1>
			</ul>
		</header>
		
		</br> 
		</br>		
<form name="authent" method="POST"  onsubmit="return verif();" action=Authentication.php>		
		
		<table class="tableau">					
		
			<tr>				
				<td><label>Votre identifiant :</label></td>
				<td vertical-align:text-top> <input type="text" name="user" id="user" style="width:250px;height:10px;text-align:center;vertical-align:text-top;font-size:15px;color:black;padding-top:9px"> </td>
				   		
			</tr>
			<tr>
				<td><label>Code secret :</label></td>
				<td> <input type="password" name="pass" id="password" style="width:250px;height:10px;text-align:center;vertical-align:middle;font-size:15px;color:black;padding-top:9px"></td>
			</tr>
			<tr>
				<td class="valider"><input type="submit" value="Valider" style="width:125px;height:25px"></td>
			</tr>
		</table>
	
	</div>
</form>

</div>
</body>
	
</html>