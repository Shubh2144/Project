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
 <div style="background-color: Whitesmoke;"class="container-fluid"><br>
  <form  style="margin-top: 50px;" method="post">
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cnm">Select Allocation No</label>
      <?php
        $db=mysql_connect("localhost","root");
        mysql_select_db("bed availability",$db);

       $sql2 = "SELECT allocationno FROM alc";
      $result2=mysql_query($sql2,$db);
      $rowcount2= mysql_num_rows($result2);
?><select name="alno" id="cnm" class="form-control" required>
        <option value=""></option>
        <?php 
        for($i=1;$i<=$rowcount2; $i++)
        {
          $row=mysql_fetch_array($result2);
        ?>
        <option value="<?php echo $row["allocationno"]?>"><?php echo $row["allocationno"]?></option>
        <?php
      }
      ?>
      </select>
     </div>
    </div>
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cnm">Select Patient ID</label>
      <?php
        $db=mysql_connect("localhost","root");
        mysql_select_db("bed availability",$db);

       $sql2 = "SELECT patientid,patientname FROM patient";
      $result2=mysql_query($sql2,$db);
      $rowcount2= mysql_num_rows($result2);
?><select name="pid" id="cnm" class="form-control" required>
        <option value=""></option>
        <?php 
        for($i=1;$i<=$rowcount2; $i++)
        {
          $row=mysql_fetch_array($result2);
        ?>
        <option value="<?php echo $row["patientid"]?>"><?php echo $row["patientid"]?>. <?php echo $row["patientname"]?></option>
        <?php
      }
      ?>
      </select>
     </div>
    </div>
    
    <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">No Of Days</label>
      <input type="text" name="nd"class="form-control" id="cn" placeholder="" required>
    </div>
   </div>
   
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Room Charges</label>
      <input type="text" name="rch"class="form-control" id="cn" placeholder="" required>
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Treat Charges</label>
      <input type="text" name="tch"class="form-control" id="cn" placeholder="" required>
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Other Charges</label>
      <input type="text" name="och"class="form-control" id="cn" placeholder="" required>
    </div>
  </div>
  <div class="form-row row justify-content-center">
    <div class="form-group col-md-6">
      <label for="cn">Total Charges</label>
       <input type="text" name="ttch"class="form-control" id="cn" placeholder="" required>
    </div>
  </div>
  <div class="form-row row justify-content-center">
     <div class="form-group col-md-6">
      <label for="cn">Discharge Date</label>
      <input type="date" name="dd"class="form-control" id="cn" placeholder="" required>
    </div>
    </div>
    <div class="text-center">
      <button type="submit" name="sbm" class="btn btn-primary">Submit</button>
    </div>
</form>

<br>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>
<?php
$db=mysql_connect("localhost","root");
mysql_select_db("bed availability",$db);
if(isset($_POST["sbm"]))
{
$alno=$_POST["alno"];
$pa=$_POST["pid"];
$nday=$_POST["nd"];
$rchrg=$_POST["rch"];
$tchrg=$_POST["tch"];
$ochrg=$_POST["och"];
$ttchrg=$_POST["ttch"];
$dt=$_POST["dd"];

$sql = "INSERT INTO dchrg ( dischargedate, allocationno, patientid, noofdays, roomcharges, treatcharges, othercharges, totalcharges) VALUES ('$dt', '$alno', '$pa', '$nday', '$rchrg', '$tchrg', '$ochrg','$ttchrg')";
   $retval = mysql_query($sql, $db);

   if(! $retval) {
      die('Could not enter data');
     echo "<script>alert('Data Cannot Added!'); location.href='discharge.php';</script>";

   }
   else {
     echo "customer Insert";
     $sql1=" UPDATE patient set status='Discharge'where patientid='$pa'";
     $sql2="UPDATE hospitalbed set available='Available' where bedno=(SELECT bedno from alc where allocationno='$alno')";
     $sql3=" Delete from alc where allocationno='$alno'";
     $r1 = mysql_query($sql1, $db);
     $r2 = mysql_query($sql2, $db);
     $r3 = mysql_query($sql3, $db);
     echo "<script>alert('Data Added!'); location.href='discharge.php';</script>";
   }

}

mysql_close($db);
?>