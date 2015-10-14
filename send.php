<?php
$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("class", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
// $email = $_POST['email'];



$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
?>
