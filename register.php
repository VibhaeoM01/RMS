<?php
session_start();
$servername = "localhost";
$port = 3307; // Adjust the port as needed
$username = "root";
$password = "";
$database= "final";
$conn = new mysqli($servername, $username, $password, $database, $port);
// $conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}



// if (isset($_POST['submit']))
// {
// $fname=$_POST['fname'];
// $lname=$_POST['lname'];
// $age=$_POST['age'];
// $mob=$_POST['mob'];
// $gender=$_POST['gender'];
// $email=$_POST['email'];
// $pw=$_POST['pw'];
// $cpw=$_POST['cpw'];

$pid = isset($_POST['p_id']) ? $_POST['p_id'] : '';
$fname = isset($_POST['p_fname']) ? $_POST['p_fname'] : '';
$lname = isset($_POST['p_lname']) ? $_POST['p_lname'] : '';
$age = isset($_POST['p_age']) ? $_POST['p_age'] : '';
$contact = isset($_POST['p_contact']) ? $_POST['p_contact'] : '';
$gender = isset($_POST['p_gender']) ? $_POST['p_gender'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pw = isset($_POST['password']) ? $_POST['password'] : '';
$cpw = isset($_POST['t_no']) ? $_POST['t_no'] : '';






$sql = "INSERT INTO passengers (p_fname, p_lname, p_age, p_contact, p_gender, email, password) VALUES ('$fname', '$lname', '$age', '$contact', '$gender', '$email', '$pw');";




// 	if(mysqli_query($conn, $sql))
// {  
// 	$message = "You have been successfully registered";
// }
// else
// {  
// 	$message = "Could not insert record"; 
// }
// 	echo "<script type='text/javascript'>alert('$message');</script>";






if(isset($_POST['submit'])) {
    if($_POST['submit'] == 'Register Now') {
        // Register button is selected, no alert message
    } else {
        // Handle registration logic
        if(mysqli_query($conn, $sql)) {
            $message = "You have been successfully registered";
        } else {
            $message = "Could not insert record"; 
        }
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}









?>
<HTML>
<HEAD>
<TITLE>Register on Indian Railways</TITLE>
<LINK REL="STYLESHEET" HREF="STYLE.CSS">
<style type="text/css">
*	{
	color: black;
}
#register_form	{
	background-color: white;
	width: 40%;
	margin: auto;
	border-radius: 25px;
	border: 2px solid blue; 
	margin-top: 25px;
	color:black;
}
#nav	{
	color: black; 	
}
#logintext	{
	margin-top: 10px;
}
#login	{
	margin-top: 10px;
	margin-bottom: 20px;
}
</style>
<SCRIPT src="validation.js"></SCRIPT>
</HEAD>
<BODY  background="img/wallpaper1.jpg" link="white" alink="white" vlink="white" width="1024" height="768">
<?php include("header.php") ?>
<div id="register_form" align="center" height="200" width="200">
<FORM name="register" method="post" action="register.php" onsubmit="return validate()">
<TABLE border="0">
<CAPTION><FONT size="6" color="WHITE"><br/>Enter your details:</FONT></CAPTION>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">First name:</FONT></TD>
<TD><INPUT name="fname" type="TEXT" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Last name:</FONT></TD>
<TD><INPUT type="TEXT" name="lname" align="center" size="30" maxlength="30" placeholder="Enter your last name" id="lname"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Age:</FONT></TD>
<TD><INPUT type="TEXT" name="age" align="center" size="30" maxlength="3" placeholder="Enter age" id="age"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Mobile Number:</FONT></TD>
<TD><INPUT type="TEXT" name="mob" size="30" maxlength="10" placeholder="Enter your mobile number" id="mob"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TR class="left">
<TD><FONT size="5" color="WHITE">Gender:</FONT></TD>
<TD>&nbsp;&nbsp;
<INPUT type="radio" name="gender" value="Male" align="center" id="gender">Male
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender" value="Female" align="center" id="gender">Female
</TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">E-Mail ID:</FONT></TD>
<TD><INPUT name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" size="30" maxlength="30"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="pw" size="30"  id="pw"></TD>
</TR><tr></tr><tr></tr>
<TR class="left">
<TD><FONT size="5" color="WHITE">Confirm Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="cpw" size="30" id="cpw"></TD>
</TR><tr></tr><tr></tr><tr></tr><tr></tr>
<tr></tr><tr></tr><tr></tr>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM><br/>
<HR width="450" style="border-color: blue;display: block;" noshade>
<FORM action="login.php">
<P align="CENTER" id="logintext"><FONT size="6" color="white" face="Arial">
Already have an account with us?<BR/></FONT></FONT>
<INPUT TYPE="submit" value="Login" id="login" class="button">
</P>
</FORM></div>
</BODY>
</HTML>