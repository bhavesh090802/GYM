<?php
include 'app/connect.php';
session_start();
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$Password = $_POST['password'];

	$sql = "SELECT email,username,password FROM register WHERE username=? ";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $username);
	$stmt->execute();

	$stmt->bind_result($db_email,$db_username,$db_pass);
	if ($stmt->fetch()) {
		$pass_decode = password_verify($Password, $db_pass);
		if ($pass_decode) {
			echo "Login Successful";
			$_SESSION['NAME'] = $db_username;
			header("location:home.php");
		} else {
			echo "Incorrect Password ";
		}
	} else {
		echo "Incorrect username";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness -Login</title>
    <script>
        function validate() {
            var pwd1 = document.getElementById("password");
            var pwd2 = document.getElementById("confirm");

            if (pwd1.value.length < 6) {
                alert("Password must have more than 6 characters");
                return false;
            } else {
                if (pwd1.value != pwd2.value) {
                    alert("Passwords do not match. Re-Enter!!");
                    return false;
                } else {
                    return true;
                }
            }
        }
    </script>
    <link rel="stylesheet" href="assets/register.css">
</head>

<body>
    <div class="showcase">
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
        <div class="wrapper">
            <form method="post" action="login.php">
                    <h2>Login</h2>
                    <label for="username" class="lab4">Username</label><br>
                    <input type="text" name="username" class="input" placeholder="Enter username" required="required"><br><br>
                    <label for="password" class="lab5">Password</label><br>
                    <input type="Password" name="password" class="input" placeholder="Enter your password" required="required"><br><br>
                    <button type="submit" name="submit" class="btn"><b>SUBMIT</b></button><br>
                    <div class="signup">
                        <p>New to Website</p>
                        <a href="register.php">Sign Up</a>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>