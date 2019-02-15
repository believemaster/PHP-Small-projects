	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>My First PHP Program</title>
			<link href="style.css" rel="stylesheet" type="text/css">

			</head>
			<body>



				<div id="main">

				<h1>PHP Code Output </h1>

				<p><?php

				// Condition

		if(isset($_POST['pass'])){

    $pass = $_POST['pass'];

			if($pass == "dream"){

      echo "<b><font color='green'>Your Password is Right ! </font></b>";

			}
			else{

            echo "<b><font color='red'> Your Password is Wrong !</font></b> ";

			} // end condition



		} // if isset


				 ?></p>
<form method="post" action="index.php">
<input type="text" name="pass" placeholder="Check Password">
<input type="submit" class="button">

</form>
			    </div>

			</body>
			</html>
