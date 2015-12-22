<?php session_start(); ob_start();?>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">    
    <link rel="stylesheet" type="text/css" href="css/grplback.css" />     
    </head>

  <body class="login-page">
        
        <?php
        include_once "../components/dbconnection.php";
            
            if (isset($_REQUEST['username'])){
                
                $username = $_REQUEST['username'];
                
                $password = $_REQUEST['password'];
                $encryptedpassword = md5($password);
                
                $result = mysqli_query($con,"SELECT id FROM users WHERE username='$username' AND password='$encryptedpassword' ");
                
                $row = mysqli_fetch_row($result);
  
                $count=mysqli_num_rows($result);
                echo $count;
                if($count == 0){
                    
                    echo   '<div class="login-container">

                                <form class="form-signin" action="index.php" method="post">
                                              <img src="images/logo.png" alt="" />
                                      <div id="loginfailedmessage" >Invalid UserName or Password</div>
                                      <p>Log In</p>
                                      <input type="text" id="username" name="username" placeholder="User Name" class="input-login" required><br />
                                      <input type="password" id="password" name="password" placeholder="Password" class="input-login" required> <br />       
                                      <button type="submit" class="btn btn-large btn-primary">Sign in</button>
                                </form>

                              </div>';
                    
                }
                
                else{
                    
                    $_SESSION['username']=$username;                    
                                          
                    header("Location: lubricants/index.php");                   
                    
                }
 
            }
            
            else{
                
                echo    '<div class="login-container">
                            
                            <form class="form-signin" action="index.php" method="post">
                                          <img src="images/logo.png" alt="" />
                                  <p>Log In</p>
                                  <input type="text" id="username" name="username" placeholder="User Name" class="input-login" required><br />
                                  <input type="password" id="password" name="password" placeholder="Password" class="input-login" required><br />    
                                  <button type="submit" class="btn btn-large btn-primary">Sign in</button>
                            </form>

                          </div>';
                
            }
            

// = "Mmpl,2606";
//echo md5($str);

        ?>      
    </body>
    
</html>
