<?php 
    session_start();
    if(isset($_SESSION["email"])=="")
    {
        header('Location:index.php');
    }
    else
    {
        $email=$_SESSION["email"];
    }
    require 'database.php';
    $obj=new database();
?>
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
<nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><strong><i class="icon fa fa-inr"></i> Expences</strong></a>
				
		
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href=""><i class="fa fa-user fa-fw"></i> <?php echo $name; ?></a>
                        </li>
                        <li><a href="userprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="changePassword.php"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>