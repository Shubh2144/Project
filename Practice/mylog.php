<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("blood",$cn);
if(isset($_POST['sbm']))
{
$u=$_POST['ui'];
$p=$_POST['ps'];
if($u=="admin" && $p=="admin")
header("location:http://localhost/practice/admin_home.html");
else
{
$sql="select count(*)from user where userid='$u' and password='$p'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
header("location:http://localhost/practice/cutomer_home.html");
}
else
echo "invalid userid and password";
}
}
?>