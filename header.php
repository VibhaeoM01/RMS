<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
	li {
		font-family: sans-serif;
		font-size:18px;
	}
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            });
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body link="white" alink="white" vlink="white">
     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="index.php">Home</A></li>
            <li><A HREF="pnrstatus.php">PNR Status</A></li>
            <li><a href="booktkt.php">Book a ticket</a></li>
            <li><a href="admin_login.php">Admin</a></li>
            <li><?php  
				if(isset($_SESSION['user_info'])){
					echo '<div id="dropdown">'.$_SESSION['user_info'].'<div id="Logout" style="display:none">Logout</div>';
        }
				else
					echo '<A HREF="login.php">User Login</A>';
				?>
			</li>
            
          
            </ul>
          </div>
        </div>
        <ul style="float: right;     
    text-decoration: none;
    background-color: #0e0c0cc7;
    padding: 4px;
    font-size:20px;
   "><a href="logout.php">Logout</a></ul>
      </div>
</body>
</html>