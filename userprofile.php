<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/ui-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:10 GMT -->
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Bootstrap Admin Template : Insight - WebThemez</title>
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
            <?php
            if(isset($_POST["btnsave"]))
            {
                $tname=$_POST["txtname"];
                $phn=$_POST["txtphn"];
                $email=$_SESSION["email"];
                $res=$obj->changeprofile($email,$tname,$phn);
                if($res==1)
                {
                        header('Location:home.php');
                }
                else
                {
                    echo '<script>alert("Not Sucefully done"); </script>';
                }
            }

            ?>
            <?php 
                                    
                                        $res1=$obj->getUserByEmail($email);
                                        $cnt=mysql_num_rows($res1);

                                        if($cnt==1)
                                        {
                                            while($row=mysql_fetch_assoc($res1))
                                            {   
                                                $name=$row["User_name"];
                                                $mail=$row["User_gmail"];
                                                $phn=$row["User_phone_number"];

                                            }
                                        }
                            ?>

            <div id="page-wrapper" >

             <div id="page-inner"> 
                       <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title"><h1 style="text-align:center">My Profile</h1></div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <form action="userprofile.php" method="post">
                                    <div class="sub-title">Name</div>
                                    <div>
                                        <input type="text" name="txtname" class="form-control" value="<?php echo "$name"; ?>"  placeholder="Enter Password" required>
                                    </div>
                                    <div class="sub-title">Email Id</div>
                                    <div>
                                        <input type="text"  value="<?php echo $mail; ?>" class="form-control" disabled placeholder="Enter Password" required>
                                    </div>
                                    <div class="sub-title">Phone Number</div>
                                    <div>
                                        <input type="text" name="txtphn" value="<?php echo $phn; ?>" class="form-control" placeholder="Enter Password" required>
                                    </div>
                                    <div style="text-align: center;margin-top: 20px;">
                                    <button type="submit" name="btnsave"  class="btn btn-default" style="width:200px">Save profile</button>
                                    </div> 
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                <!-- /. ROW  -->
                <footer>
          <?php
            include('footer.php');
          ?>    
        </footer>
                </div>
             <!-- /. PAGE INNER  -->
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

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/ui-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:19 GMT -->
</html>
