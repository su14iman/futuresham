<?php 

/***
 ____             _               ____       __  __
|  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
| | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
| |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
|____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/

                           Semoo@dr.com

***/

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
//  global $sqli;

session_start();
include('../ext/service/config.app.php');
include('../ext/service/class.json.io.php');

if(isset($_SESSION['login_user'])){ 
header('Location: home');
exit();
 } // End if .. 


$Operations = new JsonIO();
$error = '';

$loginSubmit = $_POST['login'];
$forgotSubmit = $_POST['forgot'];
$username = $_POST['username'];
$password = $_POST['password'];

    if(isset($loginSubmit)){

        if(!empty($username) && !empty($password)){
            
            $OperationsLogin = $Operations->login($username,$password);
            $loginStuate =  $OperationsLogin['s'];
            if($loginStuate == 'ok'){
                 $_SESSION['login_user'] = en($username);
                 $_SESSION['id_login'] = en($OperationsLogin['id']);
                 header('Location: home');
                    exit();
            }else{
                $error = 'password or username error';
            } // End if . 
           
        }else{
            $error = 'Password or username is empty';
        } // End if empty .. 

    } // End if .. 


    if(isset($forgotSubmit)){
        header('Location: forgot');
                    exit();
    } // End if .. 


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login || Admin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="./assets/img/logo.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="login.php" method="POST" role="form">
                                    <hr />
                                    <h5 style="color:red; text-align: center;"><?php echo $error; ?></h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input name="username" type="text" class="form-control" placeholder="Your Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input name="password" type="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                   
                                     
                                     <div style="text-align: center;">
                                    
                                    <button name="login" type="submit" class="btn btn-primary " style="width: 55%;"> Login</button>
                                    </div>
                                                                       <hr />
                                    
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
