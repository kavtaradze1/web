<!DOCTYPE html>
<?php
    include 'db.php';
    if (isset($_POST['sign'])) {
        $username=mysqli_real_escape_string($con,$_POST['username']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $c_password=mysqli_real_escape_string($con,$_POST['c_password']);
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/css/login.css">
    <title>Document</title>
</head>
<body>
<div class="form-container">
	<p class="title">რეგისტრაცია</p>
	<form class="form" action="" method="POST">
		<div class="input-group">
			<label for="username">სახელი</label>
			<input type="text" name="username" id="username" placeholder="">
            <label for="username">ელ.ფოსტა</label>
			<input type="text" name="email" id="email" placeholder="">
		</div>
		<div class="input-group">
			<label for="password">პაროლი</label>
			<input type="password" name="password" id="password" placeholder="">
            <label for="password">გაიმეორეთ პაროლი</label>
			<input type="password" name="c_password" id="c_password" placeholder="">
		</div>
		<button class="sign">რეგისტრაცია</button>
	</form>
	<p class="signup">უკვე გაქვთ ექაუნთი?
		<a rel="noopener noreferrer" href="#" class="">შესვლა</a>
	</p>
</div>
</body>
</html>