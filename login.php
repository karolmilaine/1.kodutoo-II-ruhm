<?php 
	//GET ja POSTi muutujad
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	// on �ldse olemas selline muutja
	if( isset( $_POST["signupEmail"] ) ){
		
		//jah on olemas
		//kas on t�hi
		if( empty( $_POST["signupEmail"] ) ){
			
			$signupEmailError = "See v�li on kohustuslik";
			
		}else {
 		
//oli midagi, ei olnud t�hi
//kas pikkus v�hemalt 8
if(strlen($_POST["signupPassword"]) <8 ) {
$singupPasswordError = "Parool peab olema v�hemalt 8 tm pikk ";
	}
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logi sisse v�i loo kasutaja</title>
</head>
<body>

	<h1>Logi sisse</h1>
	<form method="POST">
		
		<label>E-post</label>
		<br>
		
		<input name="loginEmail" type="text">
		<br><br>
		
		<input type="password" name="loginPassword" placeholder="Parool">
		<br><br>
		
		<input type="submit" value="Logi sisse">
		
		
	</form>
	
	
	<h1>Loo kasutaja</h1>
	<form method="POST">
		
		<label>E-post</label>
		<br>
		
		<input name="signupEmail" type="text"> <?php echo $signupEmailError; ?>
		<br><br>
		
		<input type="password" name="signupPassword" placeholder="Parool">
		<br><br>
                <br><br>
		 <label>Password</label>
		 <input name="loginPassword" type="password" <?php echo $signupPasswordError ?>
  
  
 		 <br><br>
		
		<input type="submit" value="Loo kasutaja">
		
		
	</form>

</body>
</html>







