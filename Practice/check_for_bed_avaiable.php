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
    

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap DataTable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <!-- //online-fonts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style type="text/css" media="screen">
      table {
    counter-reset: tableCount;     
      }
    .counterCell:before {
      content: counter(tableCount); 
      counter-increment: tableCount;
    }
    </style>
</head>
<body>
        <!-- header -->
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
                            <a class="nav-link" href="customer_home.html">Back
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">

                        <li>
                           <button type="button" class="btn ml-lg-2 w3ls-btn">
                              <a href="index.php">Logout</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
<div class="container">
    <br>

    <table id="example_table" class="table table-striped table-bordered table-sm">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hospital ID</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Total Beds Available</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
      <?php
      $db=mysql_connect("localhost","root");
      mysql_select_db("bed availability",$db);
      $sql = "SELECT DISTINCT hospitalid FROM hospitalbed";
      //$result = $db->query($sql);
      $result=mysql_query($sql,$db);


    if (mysql_num_rows($result)> 0) {

    // output data of each row
    while($row=mysql_fetch_array($result)) {
    $sql2= "SELECT available from hospitalbed where available='Available'and hospitalid='$row[hospitalid]'";
     $result2=mysql_query($sql2,$db);
     $a=mysql_num_rows($result2);
     $sql3="SELECT name from hospital where hospitalid='$row[hospitalid]'";
     $result3=mysql_query($sql3,$db);
     
      ?>
   <tr>
      <th class="counterCell" scope="row"></th>
      <td><?php echo "$row[hospitalid]";?></td>
      <td><?php while($row1=mysql_fetch_array($result3)) { echo "$row1[name]";}?></td>
      <td><?php echo "$a";?></td>
      <td>
        <a href="patientreg.php"><button class="btn btn-success">Request For Bed</button></a>
        
      </td>
    </tr>
    <?php
}
}
?>
  </tbody>
</table>
</div>

    <!-- footer -->
    <footer class="py-sm-4">
        <div class="container">


                <!-- footer grid1 -->
                <div class="col-lg-3 col-sm-6 fv5-contact">
                </div>
        <!-- //footer container -->
    </footer>
    <!-- //footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- jQuery Datatable js -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Datatable js -->    
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#example_table').DataTable();
      } );
    </script>
  </body>
</html>
