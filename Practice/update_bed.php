<?php
  $db=mysql_connect("localhost","root");
      mysql_select_db("bed availability",$db);
      if (isset($_GET['update'])) {
    $id = $_GET['update'];
    
    $record = mysql_query("SELECT * FROM hospitalbed WHERE bed_id=$id", $db);
    if (mysql_num_rows ( $record)== 1 ) {
      $n = mysql_fetch_array($record);

$bno=$n["hospitalid"];
$bn=$n["bedno"];
$roomno=$n["roomno"];
$type=$n["type"];
$f1=$n["facility1"];
$f2=$n["facility2"];
$re=$n["remark"];
$charge=$n["charges"];
$avail=$n["available"];
$bedid=$n["bed_id"];

?>
<html>
<head>
<link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap DataTable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
   <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/table.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
  <link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- online-fonts -->
  <link href="//fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"> 
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
</head>
<body>
  <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="admin_home.html">
                       BED AVAILABILITY
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="hospitalbed.php">Back
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
<div style="background-color: Whitesmoke;"class="container-fluid"><br>
  <form style="margin-top: 50px;" method="post">
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Bed Record</label>
      <input type="text" name="brn"class="form-control" id="cn" value="<?php echo  "$bedid" ?>" readonly>
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cnm">Select Hospital</label>
      <select name="bno" id="cnm" class="form-control"  >
      <?php

       $sql2 = "SELECT hospitalid, name FROM hospital";
      $result2=mysql_query($sql2,$db);
      $rowcount2= mysql_num_rows($result2);
?>
        <option value="<?php echo  "$bno" ?>"><?php echo  "$bno" ?></option>
        <?php 
        for($i=1;$i<=$rowcount2; $i++)
        {
          $row=mysql_fetch_array($result2);
        ?>
        <option value="<?php echo $row["hospitalid"]?>"><?php echo $row["hospitalid"]?>  <?php echo $row["name"]?></option>
        <?php
      }
      ?>
      </select>
     </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Bed No.</label>
      <input type="text" name="bn"class="form-control" id="cn" value="<?php echo  "$bn" ?>" >
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Room No</label>
      <input type="text" name="rmno"class="form-control" id="cn" value="<?php echo  "$roomno" ?>" >
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Type</label>
      <input type="text" name="typ"class="form-control" id="cn" value="<?php echo  "$type" ?>" >
    </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Facility1</label>
      <input type="text" name="fa1"class="form-control" id="cn" value="<?php echo  "$f1" ?>" >
    </div>
   </div>
   
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Facility2</label>
      <input type="text" name="fa2"class="form-control" id="cn" value="<?php echo  "$f2" ?>" >
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Remark</label>
      <input type="text" name="rm"class="form-control" id="cn" value="<?php echo  "$re" ?>">
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Charges</label>
      <input type="text" name="ch"class="form-control" id="cn" value="<?php echo  "$charge" ?>" >
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Availability</label>
      <select name="av" id="cn" class="form-control">
        <option value="<?php echo  "$avail" ?>"><?php echo  "$avail" ?></option>
        <option value="Available">Avalable</option>
        <option value="Allocate">Allocate</option>
      </select>
    </div>
  </div>
  
    <div class="text-center">
      <button type="submit" name="upd" class="btn btn-primary">Update</button>
    </div>
</form>

<br>
</div>
<?php 
}}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>
<?php
$db=mysql_connect("localhost","root");
mysql_select_db("bed availability", $db);
if(isset($_POST["upd"]))
{
$brn= $_POST["brn"];
$hno=$_POST["bno"];
$bn=$_POST["bn"];
$roomno=$_POST["rmno"];
$type=$_POST["typ"];
$f1=$_POST["fa1"];
$f2=$_POST["fa2"];
$re=$_POST["rm"];
$charge=$_POST["ch"];
$avail=$_POST["av"];

$sql="update hospitalbed set hospitalid='$hno', bedno='$bn', roomno='$roomno', type='$type', facility1='$f1', facility2='$f2', remark='$re', charges='$charge', available='$avail' where bed_id='$brn'";

   $retval = mysql_query($sql, $db);

   if(! $retval) {
     die('Could not enter data');
     echo "<script>alert('Data Not Update!'); location.href='hospitalbed.php';</script>";

   }
   else {
     echo "customer Insert";
     echo "<script>alert('Bed Data Updated!'); location.href='hospitalbed.php';</script>";
   }
}
mysql_close($db);
?>