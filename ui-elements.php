
<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:32 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>My Expences | Expences</title>
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <?php
            include('header.php');
        ?>
        <!--/. NAV TOP  -->
        <?php
            include('sidebar.php');
        ?>
        <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >
          <div class="header"> 
                        <h1 class="page-header">
                            My Expences Detail<small>Expences</small>
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="home.php">Home</a></li>
                      <li><a href="#">Tables</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>
        
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Expences
                             <a href="addExpences.php"><input style="height: 35px;
    width: 152px;
    border-radius: 20px;
    font-size: 15px;
    float: right;" type="button" value="Add New Expences" title="Add New Expences" class="btn-danger" title="Add New Expences"></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Expence Name</th>
                                            <th>Amount</th>
                                            <th>Category</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            
                                        $obj=new Database();
                                        $res=$obj->listAll($email);
                                        while($row=mysql_fetch_assoc($res))
                                        {
                                            echo '<tr>';
                                            echo '<td><font size="3" color="black">'.$row["Name"].'</font>';
                                            echo '<td><font size="3" color="black">'.$row["Amount"].'</font>';
                                            echo '<td><font size="3" color="black">'.$row["Category_name"].'</font>';
                                            echo '<td><a href="expencedel.php?id='.$row["expences_id"].'"><button style="background-color: #FF6347" type="button" class="btn btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>';
                                            echo '</tr>';
                                        }                       
                                        
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           
                <!-- /. ROW  -->
            
                <!-- /. ROW  -->
            
                <!-- /. ROW  -->
        </div>
         <!-- /. PAGE WRAPPER  -->

        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:32 GMT -->
</html>
