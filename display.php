<?php

$slu = mysql_connect("localhost", "root", "") or die("<h1 align='center'>Cannot connect to the Server</h1>");
mysql_select_db("slau_registration", $slu) or die("<h1 align='center'>Cannot connect to mysql Database</h1>");

$sql = mysql_query("select * from parent");
$hello=mysql_fetch_array($sql);

 echo'
  <tr>
    <td >'.$hello[fname].'</td>
     <td >'.$hello[sname].'</td>
    </tr>
    '
?>
