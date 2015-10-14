<?php
//my work ashaba isabella
//connection to the databse
$slau = mysql_connect("localhost", "root", "")or die("<h1 align='center'>Sorry You cannot connect to the Server</br></h1><h2 align='center'>Contact Server Admin--info@slau.ac.ug</h2>");
mysql_select_db("class", $slau)or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
//studnt table
$id = $_POST['id'];
$aa = $_POST['acadec_yr'];
$ab = $_POST['surname'];
$ac = $_POST['othrn'];
$ad= $_POST['gender'];
$ae= $_POST['dob'];
$af= $_POST['course'];
$ba = $_POST['home_d'];
$bc = $_POST['citizn'];
$bd= $_POST['marital_status'];
$be= $_POST['P_address'];
$bf= $_POST['tel'];
$sql = "insert into student(id,acadec_yr,surname,othrn,gender,dob,course,home_d,citizn,marital_status,P_address,tel) values('$id','$aa','$ab', '$ac', '$ad','$ae', '$af','$ba', '$bc','$bd', '$be','$bf')";
$done= mysql_query($sql);
if($done){

echo "Successful <a href='parent.php'>Register Again</a>";
}else{

echo "Error...Try Again ";
}
?>
