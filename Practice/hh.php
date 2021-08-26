<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
</head>
<body>
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="admin_home.html">
                       HOSPI+
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="admin_home.html">Back
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">

                        <li>
                            <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                              <a href="index.php"> Logout</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

	<!-- footer -->
	<footer class="py-sm-4">
		<div class="container">


				<!-- footer grid1 -->
				<div class="col-lg-3 col-sm-6 fv5-contact">
				</div>
		<!-- //footer container -->
	</footer>
	<!-- //footer -->

</body>
</html>

<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$err9="";
$err10="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['hid']))
{
$err1="hospital id must exist";
$fl=1;
}
if(empty($_POST['nm']))
{
$err2="name must exist";
$fl=1;
}
if(empty($_POST['ad']))
{
$err3="address must exist";
$fl=1;
}
if(empty($_POST['ad']))
{
$err3="address must exist";
$fl=1;
}
if(empty($_POST['inc']))
{
$err4="incharge must exist";
$fl=1;
}
if(empty($_POST['typ']))
{
$err5="type must exist";
$fl=1;
}
if(empty($_POST['cn']))
{
$err6="contact must exist";
$fl=1;
}
if(empty($_POST['eid']))
{
$err7="email id must exist";
$fl=1;
}
if(empty($_POST['ph']))
{
$err8="phone no must exist";
$fl=1;
}
if(empty($_POST['trm']))
{
$err9="total room must exist";
$fl=1;
}
if(empty($_POST['spe']))
{
$err10="speciality must exist";
$fl=1;
}
}
}
?>
<html>
<body>
<form name = frm action= hospital.php  method = post>
<center><table id="example_table" class="table table-striped table-bordered table-sm">
<tr>
<td>Hospital id</td>
<td><input type = text name = hid><?php echo $err1; ?></td>
</tr><br/><br/>
<tr>
<td>Name</td>
<td><input type =text name = nm><?php echo $err2; ?></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name = ad></textarea><?php echo $err3; ?></td>
</tr>
<tr>
<td>Incharge</td>
<td><input type =text name = inc><?php echo $err4; ?></td>
</tr>
<tr>
<td>Type</td>
<td><input type =text name = typ><?php echo $err5; ?></td>
</tr>
<tr>
<td>Contact</td>
<td><input type =text name = cn><?php echo $err6; ?></td>
</tr>
<tr>
<td>Email id</td>
<td><input type =text name = eid><?php echo $err7; ?></td>
</tr>
<tr>
<td>Phone No</td>
<td><input type =text name = ph><?php echo $err8; ?></td>
</tr>
<tr>
<td>Total Room</td>
<td><input type =number name = trm><?php echo $err9; ?></td>
</tr>
<tr>
<td>Speciality</td>
<td><input type =text name = spe><?php echo $err10; ?></td>
</tr></table>
<input type = submit name = sbm value = submit>
<input type = submit name = sbm value = update>
<input type = submit name = sbm value = delete>
<input type = submit name = sbm value = display>
<input type = submit name = sbm value = search>
</center>
</form>
</body>
</html>

<tbody>

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
$sql="insert into hospital values('$_POST[hid]','$_POST[nm]','$_POST[ad]','$_POST[inc]','$_POST[typ]','$_POST[cn]','$_POST[eid]','$_POST[ph]','$_POST[trm]','$_POST[spe]')";
mysql_query($sql,$cn);
echo "data stored...";
}
}
else
if($sb=="update")
{
$sql="update hospital set name='$_POST[nm]',address='$_POST[ad]',incharge='$_POST[inc]',type='$_POST[typ]',contact='$_POST[cn]',emailid='$_POST[eid]',phoneno='$_POST[ph]',totalroom='$_POST[trm]',speciality='$_POST[spe]' where hospitalid='$_POST[hid]'";
mysql_query($sql,$cn);
echo "data updated...";
}
else
if($sb=="delete")
{
$sql="delete from hospital where hospitalid='$_POST[hid]'";
mysql_query($sql,$cn);
echo "data deleted...";
}
else
if($sb=="display")
{
echo "<center><table border=1>";
echo "<caption> Hospital information</caption>";
echo "<tr>";
echo "<th>Hospitalid</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Incharge</th>";
echo "<th>Type</th>";
echo "<th>Contact</th>";
echo "<th>Emailid</th>";
echo "<th>Phoneno</th>";
echo "<th>Totalroom</th>";
echo "<th>Speciality</th>";
echo "</tr>";
$sql="select * from hospital";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "</tr>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo "<center><table border=1>";
echo "<caption> Hospital information</caption>";
echo "<tr>";
echo "<th>Hospitalid</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Incharge</th>";
echo "<th>Type</th>";
echo "<th>Contact</th>";
echo "<th>Emailid</th>";
echo "<th>Phoneno</th>";
echo "<th>Totalroom</th>";
echo "<th>Speciality</th>";
echo "</tr>";
$sql="select * from hospital where hospitalid='$_POST[hid]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "</tr>";
}
echo "</center></table>";
}
}
?>