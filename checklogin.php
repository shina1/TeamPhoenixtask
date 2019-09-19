 <?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$ok = true;
$message = array();

if(!isset($email) || empty($email)) {
	$ok = false;
	$message[] = 'Email field can not be empty!';
}
if(!($password) || empty($password)) {
	$ok = false;
	$message[] = "Password field can not be empty";
}

if($ok){
	if($email === 'dcode' && $password === 'dcode'){
		$ok = true;
		$message[] = 'Succesful login';
	}else {
		$ok = false;
		$message[] = "Incorrect username/password combination"; 
	}
}

echo json_encode(
	array(
		'ok' => $ok,
		'message' => $message
	)
);




 
?> 