<?php
session_start();
$servername = "localhost";
$port = 3307; // Adjust the port as needed
$username = "root";
$password = "";
$database= "final";
$conn = new mysqli($servername, $username, $password, $database, $port);
if (isset($_POST['submit']))
{
	
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}



$email=$_POST['email'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM passengers WHERE email = '$email' AND password = '$pw';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['email'];
			$message='Logged in successfully';
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>











<!-- <<<<<<<<<<<<<<<<<<<<<<<<<NEW SECTION>>>>>>>>>>>>>>>> -->















<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    </head>
<script type="text/javascript">
    function validate() {
        var EmailId = document.getElementById("email");
        var atpos = EmailId.value.indexOf("@");
        var dotpos = EmailId.value.lastIndexOf(".");
        var pw = document.getElementById("pw");
        
        // Check if email is valid
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= EmailId.value.length) {
            alert("Enter valid email-ID");
            EmailId.focus();
            return false;
        }
        
        // Check if password length is at least 8 characters
        if (pw.value.length < 8) {
            alert("Password consists of at least 8 characters");
            pw.focus();
            return false;
        }
        
        // Returning true to allow form submission
        return true;
    }
</script>
    <style type="text/css">
        #loginarea {
            background-color: white;
            width: 30%;
            margin: auto;
            border-radius: 25px;
            border: 2px solid black;
            margin-top: 100px;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 40px;
            font-family: sans-serif;
            font-size: 20px;
            color: white;
            height: 325px;
            width: 354px;
        }

        html {
            background: url(img/bg55.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #submit {
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0);
            padding: 7px 7px 7px 7px;
            box-shadow: inset -1px -1px rgba(0, 0, 0, 0.5);
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 17px;
            margin: auto;
            margin-top: 20px;
            display: block;
            color: white;
        }

        #logintext {
            text-align: center;
            font-size: 41px;
        }

        .data {
            color: white;
        }

        p {
            text-align: right;
            padding-top: 48px;
        }

        #registerSubmit {
            margin-left: 229px;
            margin-top: 10px;
            background-color: transparent;
             color: white;
              padding: 7px;
        }
    </style>


<body>
<?php include("header.php") ?>
<div id="loginarea">
    <form id="login" action="index.php" onsubmit="return validate()" method="post" name="login">
        <!-- Form elements -->
        <div id="logintext">Login</div><br/><br/>
        <table>
            <tr>
                <td><div class="data">E-Mail ID:</div></td>
                <td><input type="text" id="email" size="30" maxlength="30" name="email"/></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td><div class="data">Password:</div></td>
                <td><input type="password" id="pw" size="30" maxlength="30" name="pw"/></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        </table>
        <input TYPE="submit"  value="Submit" name="submit" id="submit" class="button">
       
    </form>
    <div id="reg">
        
        <p>Don't have an account?</p>
        <form id="regForm" action="register.php" method="post">
            <input type="submit" value="Register Now" name="submit" id="registerSubmit" class="button">
        </div>
    </form>
</div>








<!-- <script type="text/javascript">
    function validate() {
        var EmailId = document.getElementById("email");
        var atpos = EmailId.value.indexOf("@");
        var dotpos = EmailId.value.lastIndexOf(".");
        var pw = document.getElementById("pw");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= EmailId.value.length) {
            alert("Enter valid email-ID");
            EmailId.focus();
            return false;
        }
        if (pw.value.length < 8) {
            alert("Password consists of at least 8 characters");
            pw.focus();
            return false;
        }
        // Validation passed, redirect to index.php
        window.location.href = "index.php";
        return true; // Returning true to allow form submission
    }

    function redirectToIndex() {
        // Redirect to index.php
        window.location.href = "index.php";
    }

    var isLoginFormSubmitted = false;

    document.getElementById('login').addEventListener('submit', function() {
        isLoginFormSubmitted = true;
    });

    document.getElementById('registerForm').addEventListener('submit', function() {
        isLoginFormSubmitted = false;
    });


    window.onload = function() {
        if (!isLoginFormSubmitted) {
            alert('Your message');
        }
    };
</script> -->

</body>
</html>













