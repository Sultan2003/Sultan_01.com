<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mid-Term exam</title>
	<link rel="stylesheet" type="text/css" href="Css2.css">
	<script src="Js3.js"></script>
</head>
<style>
body {
  background-image: url('background.png');
}
</style>
<body>

	<header>
		<img src="logo.jpg">
		<h2> Sultanbek</h2>
	</header>
	<div class="left-side">
		<img src="cake.jpg">
		<img src="photo3.jpg">
		<form style="background-color: pink;" id="1">
			<p>История кондитерской Cake Lab берёт своё начало в 2012 году. Это история о том, как обычное хобби переросло в крупное дело, в которое основательница вкладывает любовь и душу по сей день.

Увлечение выпечкой и кондитерским искусством в свободное время приносило много восторженных отзывов от родных и близких. Спустя некоторое время пришла идея открыть свой маленький и уютный уголок, где каждый желающий смог бы отведать вкусную выпечку и сладости. </p>
		</form>






	</div>

	<div class="right-side">
		<form id="2" action="index.php" method="post">
		<label for="name">Name:</label><br>
		<input type="text" name="name" id="name" placeholder="Enter your Name"><br>
		<label for="email">Email:</label><br>
		<input type="text" name="email" id="email" placeholder="Enter your Email"><br>
		<label for="number">Phone number:</label><br>
		<input type="number" name="number"  id="number" placeholder="Phone Number"><br>
		<label for="password">Password:</label><br>
		<input type="password" name="password" id="password" placeholder="Enter your Password"><br>
		<label for="repassword">Repeat Password:</label><br>
		<input type="password" id="repassword" placeholder="Repeat the Password"><br><br>
		<p id="message"></p>
		<input type="submit" id="submit" name="submit"  onclick="checkPassword()" value="SUBMIT"/>
		<a style="color: red;" href="http://localhost/php">Refresh</a>
		<br>
		<br>
		
		<?php
			if(array_key_exists('submit',$_POST)){

			$link=mysqli_connect("localhost","root","","users");

			$name=$_POST['name'];
			$email=$_POST['email'];
			$number=$_POST['number'];
			$password=$_POST['password'];


			$sql="INSERT INTO users_list (name,email,number,password) VALUES ('$name','$email','$number','$password')";
			if (mysqli_query($link,$sql)) {
				echo "Records added successfully.";
			}
			else{
				echo "Error" . mysqli_error($link);
			}


			mysqli_close($link);

			}
		?>



		</form>

		




	</div>
	<footer>
		<h2>Footer</h2>

	</footer>
</body>
</html>