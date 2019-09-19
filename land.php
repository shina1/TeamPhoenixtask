<?php
session_start();
if(isset($_POST['submit'])){
	$email = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = inputCheck($_POST["email"]);
	$password = inputCheck($_POST["password"]);
}
function inputCheck($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//  variables for holding empty values
$mailerr = "";
$passworderr = "";
$password = "";
$email = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST['email'])){
		$mailerr = "Please enter your email";
	}else{
		$email = inputCheck($_POST["email"]);
	}
	if(empty($_POST['password'])){
		$passworderr = "Password required";
	}else{
		$password = inputCheck($_POST["password"]);
	}
}
	$bring = $_POST['submit'];
	$email = $_POST['email'];
	$_SESSION['mail'] = $Mail;
	header('location:dashboard.php');
}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Welcome|LogIn</title>
</head>
<style type="text/css">
	.error{
		background-color:rgba(255, 232, 232);
	    border: 1px solid red;
	    color: red;
	    display: none;
	    font-size: 12px;
	    font-weight: bold;
	    margin-bottom: 10px;
	    padding: 10px 25px;
	    max-width: 250px;
	}

</style>
<body>
<div class="container">	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<input type="email" id="email" name="email" placeholder="you@mail.com">
	<span class=""><?php echo $mailerr; ?> </span> <br><br>
	<input type="password" id="txtpsw" name="password" placeholder="******">
	<span class="" ><?php echo $passworderr; ?></span> <br><br>
	<input type="checkbox" id="showpassword" onclick="showPass();"> <h3>Show Password</h3>
	<input type="submit" id="submitBtn" name="submit" placeholder="Submit" value="submit">
	</form>
</div>
<script type="text/javascript">
	const showPass = () => {
		const pass = document.getElementById('txtpsw');
		const show = document.getElementById('showpassword');
		if(show.checked){
			pass.setAttribute('type', 'text');
		}else{
			pass.setAttribute('type', 'password');
		}
	}
</script>
	
</body>
</html>