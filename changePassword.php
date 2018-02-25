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
            if(isset($_POST["btnpassword"]))
            {
                $oldpassword=$_POST["oldpassword"];
                $newpassword=$_POST["newpassword"];
                $cnfrmpassword=$_POST["cnfrmpassword"];
                $email=$_SESSION["email"];
                if($newpassword==$cnfrmpassword)
                {

                    $res=$obj->checkpassword($email,$oldpassword);
                    $cnt=mysql_num_rows($res);
                    if($cnt==1)
                    {
                        $res1=$obj->changepassword($email,$newpassword);
                        if($res1==1)
                        {
                            header('Location:home.php');
                        }
                        else
                        {
                            echo '<script>alert("Not Sucefully done"); </script>';
                        }
                    }
                    else
                    {
                        echo '<script>alert("Old Password is Wrong ! Try Again"); </script>';
                
                    }

                }
                else
                {
                    echo '<script>alert("Password doesnt match ! Try Again"); </script>';
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
                                        <div class="title"><h1 style="text-align:center">Change Password</h1></div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                <form action="changePassword.php" method="post">
                                    <div class="sub-title">Enter Old Password*</div>
                                    <div>
                                        <input type="text" class="form-control" name="oldpassword"  placeholder="Enter Password" required>
                                    </div>
                                    <div class="sub-title">Enter New Password*</div>
                                    <div>
                                        <input type="text" name="newpassword" class="form-control" placeholder="Enter Password" required>
                                    </div>
                                    <div class="sub-title">ReEnter New Password*</div>
                                    <div>
                                        <input type="text" name="cnfrmpassword" class="form-control" placeholder="Enter Password" required>
                                    </div>
                                    <div style="text-align: center;margin-top: 20px;">
                                    <button type="submit" name="btnpassword" class="btn btn-default" style="width:200px">Change Password</button>
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
