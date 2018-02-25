<?php 
    session_start();
    require 'database.php';
    $obj=new database();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>



<body>

  <div class="form">
      <?php 
    if(isset($_POST["btnsignup"]))
    {
        $email=$_POST["txtemail"];
        $name=$_POST["txtname"];
        $phone=$_POST["txtphone"];
        $pass=$_POST["txtpassword"];
        $conpass=$_POST["txtrepassword"];
      
        if($pass==$conpass)
        {
            $res=$obj->signup($name,$email,$phone,$pass);
            if($res==1)
            {
                $_SESSION["email"]=$email;
                $res=$obj->getid($email);
                while($row=mysql_fetch_assoc($res))
                {
                    $user_id=$row["User_Id"];
                }
                $_SESSION["user_id"]=$user_id;      
                header('Location:home.php');
            }
            else
            {
                echo "Someting Went Wrong";
            }
        }  
        else
        {
            echo "PAssword and Re PAssword dont Match";
        }
    }
?>
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="index.php" method="post">
          
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" name="txtname" required autocomplete="off" />
            </div>
          
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="txtemail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Phone Number<span class="req">*</span>
            </label>
            <input type="text" name="txtphone" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="txtpassword" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              ReEnter Password<span class="req">*</span>
            </label>
            <input type="password" name="txtrepassword" required autocomplete="off"/>
          </div>
          <button type="submit" class="button button-block" name="btnsignup"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
        <?php 
            if(isset($_POST["btnlogin"]))
            {
                $email=$_POST["txtemail"];
                $pass=$_POST["txtpassword"];
                
              //  $obj=new database();
                    $res=$obj->login($email,$pass);
                    $cnt=mysql_num_rows($res);
                   
                    if($cnt==1)
                    {
                        $_SESSION["email"]=$email;
                       // echo $email;
                        $res=$obj->getid($email);
                        while($row=mysql_fetch_assoc($res))
                        {
                            $user_id=$row["User_Id"];
                            echo $user_id;
                        }
                        $_SESSION["user_id"]=$user_id;
                        header('Location:home.php');
                    }
                    else
                    {
                        echo '<script language="javascript">;
                                    alert("Invalid user");
                                </script>';
                    }
            }
        ?>
          <h1>Welcome Back!</h1>
          
          <form action="index.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="txtemail" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="txtpassword" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <a href="loginsignup.php"><button class="button button-block" name="btnlogin"/>Log In</button></a>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
