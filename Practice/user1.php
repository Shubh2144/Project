<?php
$err1="";
$err2="";
$err3="";
$err4="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['ui']))
{
$err1="User Id must exist";
$fl=1;
}
if(empty($_POST['un']))
{
$err2="User Name must exist";
$fl=1;
}
if(empty($_POST['eid']))
{
$err3="Email Id must exist";
$fl=1;
}
if(empty($_POST['ps']))
{
$err4="Password must exist";
$fl=1;
}
}
}
?>
<html>
<body>
<form name = frm form action =user1.php method=post>
<center><table>
<caption>User Information</caption>
<tr>
<td>userid</td>
<td><input type=text name=ui><?php echo $err1; ?></td>
</tr>
<tr>
<td>username</td>
<td><input type = text name =un><?php echo $err2; ?></td>
</tr>
<tr>
<td>Email Id</td>
<td><input type = text name =eid><?php echo $err3; ?></td>
</tr>
<tr>
<td>password</td>
<td><input type=password name=ps><?php echo $err4; ?></td>
</tr>
</table>
<input type = submit name=sbm value = submit>
<input type = submit name=sbm value = update>
<input type = submit name=sbm value = delete>
<input type = submit name=sbm value = display>
<input type = submit name=sbm value = search>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("bed availability",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
if($fl==0)
{
$sql="insert into user values('$_POST[ui]','$_POST[un]','$_POST[eid]','$_POST[ps]')";
mysql_query($sql,$cn);
echo "data stored...";
}
}
else
if($sb=="update")
{
$sql="update user set username='$_POST[un]', emailid='$_POST[eid]' ,password='$_POST[ps]' where userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo "data updated...";
}
else
if($sb=="delete")
{
$sql="delete from user where userid='$_POST[ui]'";
mysql_query($sql,$cn);
echo "data deleted...";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption> user information</caption>";
echo "<tr>";
echo "<th>User Id</th>";
echo "<th>Username</th>";
echo "<th>Email Id</th>";
echo "<th>Password</th>";
echo "</tr>";
$sql="select * from user";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption> user information</caption>";
echo "<tr>";
echo "<th>User Id</th>";
echo "<th>Username</th>";
echo "<th>Email Id</th>";
echo "<th>Password</th>";
echo "</tr>";
$sql="select * from user where userid='$_POST[ui]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "</tr>";
}
echo "</center></table>";
}
}
?>