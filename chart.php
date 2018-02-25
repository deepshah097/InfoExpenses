<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:30 GMT -->
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Bootstrap Admin Template : BRILLIANT - WebThemez</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small>Welcome <?php echo $name; ?></small>
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Dashboard</a></li>
                      <li class="active">Data</li>
                    </ol> 
                                    
        </div>
            <div id="page-inner"> 
            <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3><?php echo $sum; ?></h3>
                                <small>Today's Expences <?php echo $day;?></small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-inr fa-5x red"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3><?php echo $tot; ?></h3>
                                <small>Monthly Expences</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-inr fa-5x blue"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3><?php echo $final; ?></h3>
                                <small>Total Expences</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-inr fa-5x green"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                   
                </div>
                    
                    <div class="row">
                        
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Bar Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="bar-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div> 
                       

                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Pie & Doughnut Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="pie-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <div hidden class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Radar Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="radar-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div hidden class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Polar Area Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="polar-area-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
                            <div hidden class="col-sm-6 col-xs-12">  
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Line Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="line-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                        
                             <div class="col-sm-6 col-xs-12">
                            <div hidden class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Line Chart</div>
                                    </div>
                                </div>
                                  <div class="panel-body">
                                     <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                                </div> 
                            </div>
                        </div>
                    </div>
                 
             
				 <footer><?php include('footer.php');
                 ?></footer>
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
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 
     <!-- Morris Chart Js -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
   
</body>

<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:30 GMT -->
</html>
