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

    // code here

		if(isset($_POST['num'])){

	function sum($a, $b){
				$c = $a + $b;

				return $c;
			}

  $num = $_POST['num'];
  $num2 = $_POST['num2'];

 $call = sum($num,$num2);



		echo "Your SUM: ".$call;

		}


				 ?></p>
				 <form method="post" action="sum.php">
				 <input type="text" name="num" placeholder="Number">
				 <input type="text" name="num2" placeholder="Number">

				 <input type="submit" value="SUM" class="button">

				 </form>
			    </div>

			</body>
			</html>
