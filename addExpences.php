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
            if(isset($_POST["btnAddExpences"]))
            {
                $name=$_POST["txtname"];
                $amount=$_POST["txtamount"];
                $cat=$_POST["cat"];
                $day=$_POST["day"];
                $month=$_POST["month"];
                $user_id=$_SESSION["user_id"];

                
                $res=$obj->addExpences($user_id,$cat,$amount,$day,$month,$name);
                if($res==1)
                {
                    header('Location:ui-elements.php');
                }
                else
                {
                    echo"something went wrong";
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
                                        <div class="title"><h1 style="text-align:center">Add Your Daily Expences Here</h1></div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                <form action="empty.php" method="post">
                                    <div class="sub-title">Expence Name*</div>
                                    <div>
                                        <input type="text" class="form-control" name="txtname"  placeholder="Enter Expence Name" required>
                                    </div>
                                    <div class="sub-title">Amount*</div>
                                    <div>
                                        <input type="text" name="txtamount" class="form-control" placeholder="Enter Amount" required>
                                    </div>
                                    <div class="sub-title">Select Category*</div>
                                    <div>
                                        <select class="selectbox" name="cat" style="width:100%">
                                            <?php
                                                $obj=new database();
                                                $res=$obj->getAllCat();
                                                while($row=mysql_fetch_array($res,MYSQL_ASSOC))
                                                {
                                                    echo '<option value="'.$row["Category_id"].'">'.$row["Category_name"].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="sub-title">Select Day*</div>
                                    <div>
                                        <select name="day" class="selectbox" style="width:100%">
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>

                                        </select>
                                    </div>
                                    <div class="sub-title">Select Month*</div>
                                    <div>
                                        <select class="selectbox"  name="month"  style="width:100%">
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>  
                                        </select>
                                    </div>
                                    <div style="text-align: center;margin-top: 20px;">
                                    <button type="submit" name="btnAddExpences" class="btn btn-default" style="width:200px">Submit</button>
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
