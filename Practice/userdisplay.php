<html>
<head>
<script language=javascript>
function show()
{
window.print();
}
</script>
</head>
<body>
<form name = frm form action = userdisplay.php  method=post>
<center>
<h1>user information report</h1>
<input type = submit name=sbm value = display>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("project",$cn);
$sb=$_POST['sbm'];
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption> user information</caption>";
echo "<tr>";
echo "<th>userid</th>";
echo "<th>username</th>";
echo "<th>password</th>";
echo "</tr>";
$sql="select * from user";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "</tr>";
}
echo "</table>";
echo "<input type=button name=btn value=print onclick=show()></center>";
}
}
?>