<?php
include 'app/connect.php';

if (isset($_POST['submit'])) {
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $Email = $_POST['email'];
    $user = $_POST['username'];
    $Password = $_POST['password'];
    $Confirm = $_POST['confirm'];

    $pass = password_hash($Password, PASSWORD_DEFAULT);

    $email_check = "SELECT * FROM register WHERE email = ?";
    $email_stmt = $conn->prepare($email_check);
    $email_stmt->bind_param("s", $email);
    $email_stmt->execute();

    $email_stmt->store_result();
    if ($email_stmt->num_rows() > 0) {
?>
        <script>
            alert("User Already Registered!")
        </script>
<?php
    } else {

        //template for sql query
        $sql = "INSERT INTO register( fname, lname, email, username, password) VALUES (?,?,?,?,?)";

        //preparing the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $first, $last, $Email, $user, $pass);
        $result = $stmt->execute();

        if ($result) {
            header("location:login.php");
        }
    }
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness -Registeration</title>
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
            <form method="post" action="register.php">
                    <h2>Registration</h2>
                    <label for="fname" class="lab1">First Name</label><br>
                    <input type="text" name="fname" class="input" placeholder="Enter your first name" required="required"><br><br>
                    <label for="lname" class="lab2">Last Name</label><br>
                    <input type="text" name="lname" class="input" placeholder="Enter your last name" required="required"><br><br>
                    <label for="email" class="lab3">Email</label><br>
                    <input type="email" name="email" class="input" placeholder="Enter your mail id" required="required"><br><br>
                    <label for="username" class="lab4">Username</label><br>
                    <input type="text" name="username" class="input" placeholder="Enter username" required="required"><br><br>
                    <label for="password" class="lab5">Password</label><br>
                    <input type="Password" name="password" class="input" placeholder="Enter your password" required="required"><br><br>
                    <label for="confirm" class="lab6">Confirm Password</label><br>
                    <input type="password" name="confirm" class="input" placeholder="confirm password" required="required"><br><br>
                    <button type="submit" name="submit" class="btn"><b>SUBMIT</b></button><br>
                    <div class="signup">
                        <p>Already have an account</p>
                        <a href="login.php">Login</a>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>