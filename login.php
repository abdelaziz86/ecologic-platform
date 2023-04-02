<?php 

require_once 'connect.php' ; 
session_start() ; 

if (isset($_POST["submit"])) {
	if ((isset($_POST["username"]))||(isset($_POST["password"]))) {
		$username = $_POST['username'] ;
		$password = $_POST['password'] ; 
		$req = "select * from user where username='$username' and password='$password'" ;
	 	$result = mysqli_query($con,$req) ;
	 	if ($result->num_rows>0) {
		 	while ($row = $result->fetch_assoc()) {
		 		$_SESSION['username'] = $row['username'] ;  
		 		$_SESSION['id_user'] = $row['id'] ; 
		 		$_SESSION['name'] = $row['name'] ; 
		 		$_SESSION['adresse'] = $row['adresse'] ; 
		 		
		 		echo "<script>window.top.location='index.php'</script>" ;
		 	}
	 	} else {
	 		echo "Invalid user" ; 
	 	}
	}
}



?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	
	<style>
		body {
			    vertical-align: top;
    			background-image: url(ns_text_bg.jpg);
		}
		.block {
			margin-top: 100px  ; 
			background-color: #DBDBDB ; 
			padding : 20px ; 
			width: 35% ;
			height: 330px ; 
			align-items: center ; 
			padding-top: 20px ;   
			border-radius: 20px ; 
			box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
			font-family: 'Lobster', cursiv ; 
			letter-spacing: 1px ; 

		}

		.input { 
			height: 25px ;
			font-size: 20px; 
			margin : 5px ; 
			font-size: 16px ; 
		}
		.button {
			font-size: 20px ;   
			margin-top: 20px; 
			margin-bottom: 20px ;   
			box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
			font-family: 'Lobster', cursiv ; 
			background-color: #DBE5E9 ; 
			padding : 10px ; 
			padding-top: 6px ; 
			padding-bottom: 6px ; 
			transition: all 0.4s ; 
		}
		.button:hover {
			background-color: #71939F ;
			color : white ; 
			transform: scale(1.05);
		}

		@media only screen and (max-width: 720px) {
		  .block {
		    width : 70% ;
		  }
		}
	</style>

	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

 

 	<?php 
 		include 'navbar.php' 
 	?>

	<center>
		<div class="block"  >
			<H2  >Login to your account</H2> 
			<hr style="margin-bottom: 30px ;   color : 1px solid black ; ">
			<form action="" method="POST">
				<table>
					<tr>
						<td>
							<i class='fas fa-user-alt' style='font-size:24px'> </i> &nbsp;
						</td>
						<td> 
							<input class="input" type="text" name="username" placeholder="Username">
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-lock" style="font-size:24px"> </i> &nbsp;
						</td>	
						<td>
							<input class="input" type="password" name="password" placeholder="Password">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<center style="margin-bottom: 20px ; ">
								<input class="button" type="submit" name="submit" value="Login">
								<div>Don't have an account ? <a href="signup.php">Sign up</a> now.</div>
							</center>
						</td>
					</tr>
				</table>


			</form>
		</div>
	</center>
	

	 
</center>






</body>
</html> 