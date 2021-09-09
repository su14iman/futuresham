<?php
/***
 ____             _               ____       __  __
|  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
| | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
| |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
|____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/

                           Semoo@dr.com

***/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// error_reporting(0);
//  global $sqli;
include ('./session.php');


// echo "Hi : ".$username."<br/>".$id_login."<br/>".$_SESSION["login_user"]."<br/>".$_SESSION["id_login"];
// echo "<br/> <a href='logout'>logout</a>";





        include("./ext/pages/hedaer.php");

?>








                    <div style="width: 40%; float: right; background-color: #7d7d7d; text-align: center; padding: 1%; ">
                        <label>تعديل العملات:</label>
                        <form action="json.php" method="post">
                            <label style="color:#fff; float: left;">USD to SYP</label>
                            <input type="number" name="CurEditUSDC" placeholder="USD SYP" style="width: 90%; margin:1%;">
                                <br/>
                            <label style="color:#fff; float: left;">TRY to SYP</label>
                            <input type="number" name="CurEditTRYC" placeholder="TRY SYP" style="width: 90%; margin:1%;">
                                <br/>
                            <button style="background-color: green" type="submit">تحديث</button>

                        </form>
                    </div>





<?php
    
    include('./ext/pages/footer.php');

?>

