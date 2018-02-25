<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">


<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:27 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Home | Expences</title>
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
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    
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
            $user_id=$_SESSION["user_id"];
            $day=(int)date("d");                               
            $res=$obj->getTodayExpences($user_id,$day);
            $cnt=mysql_num_rows($res);
            $sum=0;

            if($cnt>=1)
            {
                while($row=mysql_fetch_assoc($res))
                {   
                    $sum=$sum+$row["Amount"];
                }                           
            }   
        ?>
        <?php                                   
            $user_id=$_SESSION["user_id"];
            $month=(int)date("m"); 

            $res=$obj->getThisMonthExpences($user_id,$month);
            $cnt=mysql_num_rows($res);
            $tot=0;

            if($cnt>=1)
            {
                while($row=mysql_fetch_assoc($res))
                {   
                    $tot=$tot+$row["Amount"];
                }                           
            }   
        ?>
        <?php                                   
            //$user_id=$_SESSION["user_id"];
            $res=$obj->getTotalExpences($user_id);
            $cnt=mysql_num_rows($res);
            $final=0;

            if($cnt>=1)
            {
                while($row=mysql_fetch_assoc($res))
                {   
                    $final=$final+$row["Amount"];
                }                           
            }   
        ?>
        <?php                                   
    $user_id=$_SESSION["user_id"];
    $res=$obj->getExpenceByMonth($user_id);
    $cnt=mysql_num_rows($res);
    $no1=0;$no2=0;$no3=0;$no4=0;$no5=0;$no6=0;
    $no7=0;$no8=0;$no9=0;$no10=0;$no11=0;$no12=0; 

    if($cnt>=1)
    {
        while($row=mysql_fetch_assoc($res))
        {   
            $month=$row["Month"];
            if($month=="1")
                $no1=$no1+$row["Amount"];
            if($month=="2")
                $no2=$no2+$row["Amount"];
            if($month=="3")
                $no3=$no3+$row["Amount"];
            if($month=="4")
                $no4=$no4+$row["Amount"];
            if($month=="5")
                $no5=$no5+$row["Amount"];
            if($month=="6")
                $no6=$no6+$row["Amount"];
            if($month=="7")
                $no7=$no7+$row["Amount"];
            if($month=="8")
                $no8=$no8+$row["Amount"];
            if($month=="9")
                $no9=$no9+$row["Amount"];
            if($month=="10")
                $no10=$no10+$row["Amount"];
            if($month=="11")
                $no11=$no11+$row["Amount"];
            if($month=="12")
                $no12=$no12+$row["Amount"];
        }                           
    }   
?>
<?php                                   
    //$user_id=$_SESSION["user_id"];
    $res=$obj->getCategoryByExpence($user_id);
    $cnt=mysql_num_rows($res);
    $cat1=0;$cat2=0;$cat3=0;$cat4=0;$cat5=0;$cat6=0;$cat7=0;$cat8=0; 

    if($cnt>=1)
    {
        while($row=mysql_fetch_assoc($res))
        {   
            $cat=$row["Category_name"];
            if($cat=="Petrol")
                $cat1=$cat1+$row["Amount"];
            else if($cat=="Food")
                $cat2=$cat2+$row["Amount"];
            else if($cat=="Bills")
                $cat3=$cat3+$row["Amount"];
            else if($cat=="EMI")
                $cat4=$cat4+$row["Amount"];
            else if($cat=="Entertaiment")
                $cat5=$cat5+$row["Amount"];
            else if($cat=="Shopping")
                $cat6=$cat6+$row["Amount"];
            else if($cat=="Travel")
                $cat7=$cat7+$row["Amount"];
            else if($cat=="Other")
                $cat8=$cat8+$row["Amount"];

        }                           
    }   
?>

<script>
                                var barChartData = {
                                    labels : ["Jan","Feb","Mar","April","May","June"],
                                    datasets : [
                                        {
                                            fillColor : "rgba(233, 78, 2, 0.9)",
                                            strokeColor : "rgba(233, 78, 2, 0.9)",
                                            highlightFill: "#e94e02",
                                            highlightStroke: "#e94e02",
                                            data : [<?php echo $no1;?>,<?php echo $no2;?>,<?php echo $no3;?>,<?php echo $no4;?>,<?php echo $no5;?>,<?php echo $no6;?>]
                                        }   
                                        ]
                                    
                                };
                                var lineChartData = {
                                    labels : ["July","Aug","Sep","Oct","Nov","Dec"],
                                    datasets : [
                                        {
                                            fillColor : "rgba(242, 179, 63, 1)",
                                            strokeColor : "#F2B33F",
                                            pointColor : "rgba(242, 179, 63, 1)",
                                            pointStrokeColor : "#fff",
                                            data : [<?php echo $no7;?>,<?php echo $no8;?>,<?php echo $no9;?>,<?php echo $no10;?>,<?php echo $no11;?>,<?php echo $no12;?>]
                                        }
                                    ]
                                    
                                };
                                var pieData = [
                                        {
                                            value: <?php echo $cat1;?>,
                                            color:"rgba(233, 78, 2, 1)",
                                            label: "Petrol"
                                        },
                                        {
                                            value : <?php echo $cat2;?>,
                                            color : "rgba(242, 179, 63, 1)",
                                            label: "Food"
                                        },
                                        {
                                            value : <?php echo $cat3;?>,
                                            color : "rgba(88, 88, 88,1)",
                                            label: "Bills"
                                        },
                                        {
                                            value : <?php echo $cat4;?>,
                                            color : "rgba(79, 82, 186, 1)",
                                            label: "EMI"
                                        },
                                        {
                                            value : <?php echo $cat5;?>,
                                            color : "rgba(233, 78, 2, 1)",
                                            label: "Entertaiment"
                                        },
                                        {
                                            value : <?php echo $cat6;?>,
                                            color : "rgba(242, 179, 63, 1)",
                                            label: "Shopping"
                                        },
                                        {
                                            value : <?php echo $cat7;?>,
                                            color : "rgba(88, 88, 88,1)",
                                            label: "Travel"
                                        },
                                        {
                                            value : <?php echo $cat8;?>,
                                            color : "rgba(79, 82, 186, 1)",
                                            label: "Other"
                                        }
                                        
                                    ];
                                
                            new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
                            new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
                            
                            </script>
                            <?php 
                                    
                                        $res1=$obj->getUserByEmail($email);
                                        $cnt=mysql_num_rows($res1);

                                        if($cnt==1)
                                        {
                                            while($row=mysql_fetch_assoc($res1))
                                            {   
                                                $name=$row["User_name"];
                                            }
                                        }
                            ?>
		  
            <?php include('chart.php'); ?>
        <!-- /. PAGE WRAPPER  -->
        <footer><?php
                    include('footer.php');
                ?>
        
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>


<!-- Mirrored from webthemez.com/demo/brilliant-free-bootstrap-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2018 15:05:30 GMT -->
</html>