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

		if(isset($_POST['name'])){

    $name = $_POST['name'];
		echo "Your Name: ".$name."<br>";
		$gender = $_POST['gender'];
		echo "Your Gender: ".$gender."<br>";
		$year = $_POST['year'];
		echo "Your Year: ".$year."<br>";
		$rv = $_POST['rv'];
		echo "Your Review: ".$rv."<br>";
		}


				 ?></p>




<form method="post" action="index.php">
<input type="text" name="name">
<input type="radio"  name="gender" value="male" style="width:30px; height:30px;">
Male</input>
<input type="radio" name="gender"  value="female" style="width:30px; height:30px;">
Female</input>
<select name="year" >
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>
<p>Was this method helpful?</p>
<input type="checkbox"   name="rv"   value="yes" style="width:30px; height:30px;">
Yes</input>
<input type="checkbox" name="rv" value="no"  style="width:30px; height:30px;">
No</input>
<input type="submit"  class="button">



</form>
			    </div>

			</body>
			</html>
