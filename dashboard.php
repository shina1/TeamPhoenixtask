<?php 
session_start();
$mail = $_SESSION['mail'];
?>


<!DOCTYPE html>
<html>
<style type="text/css">
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<head>
	<title></title>
</head>
<body>
<table style="width:100%">
  <tr>
    <td><h3>Welcome!</h3></td> 
    <td><?php echo  $mail ?></td>
  </tr>
  
</table>
</body>
</html>
<?php 
session_unset();

?>