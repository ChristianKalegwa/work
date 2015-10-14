<?php
session_start();
include_once 'Server_connection.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>St.Lawrence Univerisy || Registration System</title>
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 16pt;
}
-->
</style>
</head>

<body>
<!--  -->

  <tr>
    <td colspan="5" bordercolor="#999999" bgcolor="#00FF99"><h3 align="center" class="style1">WELCOME TO ST.LAWRENCE COURS WORK: session and injection. </h3></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right"></div>
    <?php echo $userRow['username']; ?></td>
    <td colspan="2"><a href="logout.php?logout">Sign Out</a></td>
  </tr>
  
  <tr>
    <td ><p>&nbsp; </p>
    <p align="center">St.lawrence University 2016</p>
    <p align="center">&nbsp;</p></td>
  </tr>
</table> 
<div align="center">Never give up in life it was hard but still trying hope with God and our lectures every thing will be smooth
</div>
</body>
</html>
