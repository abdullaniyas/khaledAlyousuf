<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/teemstore.css" />
        <link rel="stylesheet" type="text/css" href="../css/login.css" />
        <!--        <link rel="stylesheet" type="text/css" href="../css/style.css" />
                 Slider 
                <script type="text/javascript" src="../js/modernizr.custom.28468.js"></script>-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Slider ends -->
        <!-- Header -->
        <?php include '../components/header.php'; ?>

    <div class="popup-container hide">
        <div class="popup-inner">
            <h1>Forgot Password ?</h1>
            <p>Enter your email id, will send you the reset link</p>
            <form>
                <input type="text" name="email" class="popup-text" Placeholder="Enter your email id"/><br/>
                <input type="submit" value="Reset" class="submit" />
            </form>

        </div>
    </div>
    <!-- header ends here -->	
    <section class="margin-extra">
        <div class="login-page">
            <div class="register-account pull-left width-50">
                <div class="new-user">
                    <h2>Not a user yet?</h2>
                    <h5>Create an account! It's quick, free and gives you access to special features.</h5>
                    <form>
                        <table>
                            <tr>
                                <td><input type="text" name="username" class="input-sign username" Placeholder="Login ID" required /></td>
                                <td><input type="text" name="email" class="input-sign email" Placeholder="Email ID" required/></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="password" class="input-sign password" Placeholder="Password" required /></td>
                                <td><input type="password" name="re-password" class="input-sign password" Placeholder="Re-Enter Password" required /></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="date" class="input-sign username" Placeholder="Date of Birth" required /></td>
                                <td><input type="radio" name="gender" value="Male" class="check-box username" required /><label>Male</label>
                                    <input type="radio" name="gender" value="Female" class="check-box username" required /><label>Female</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="city" class="input-sign username" Placeholder="City" required /></td>
                                <td><select class="input-sign" required >
                                        <option>- Select state -</option>
                                        <option>Karnataka</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="mobile" class="input-sign username" Placeholder="Mobile" required /></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>By clicking this button you agree and accept our <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>.</p>
                                </td>

                            </tr>
                            <tr>
                                <td><button>Create Account</button></td>
                                <td></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="pull-left width-50">
                <div class="sign-in-container">
                    <h2>Login to your account</h2>
                    <form>
                        <input type="text" name="username" class="input-sign username" Placeholder="Enter You Login ID" />
                        <input type="password" name="password" class="input-sign password" Placeholder="Enter You Password" />
                        <button>Login</button>
                        <a href="#" class="show-popup">Forgot password ? </a>
                    </form>
                    <div class="login-or">
                        <p>OR</p>
                    </div>
                    <h2>Social login</h2>
                    <div class="social-login">
                        <a href="#" class="fb-login"></a>
                        <a href="#" class="google-login"></a>
                    </div>

                </div>
            </div>
        </div>
        <section>


            <!-- Footer -->

            <?php include '../components/footer.php'; ?>

            <script src="../js/jquery-1.11.1.js"></script>
            <script type="text/javascript" src="../js/teemstore.js"></script>
            </body>
            </html>