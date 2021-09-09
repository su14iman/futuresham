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
    include('./ext/service/config.app.php');
    include('./ext/service/class.json.io.php');

    include("./ext/pages/header.php");

    // $sqli->query("INSERT INTO `software` (`id`, `name`, `icon`, `description`, `timeAdd`, `url`, `ip`, `s`) VALUES (NULL, 'TL-WR840N_V1_141120', '', '', '', 'INSERT INTO `software` (`id`, `name`, `icon`, `description`, `timeAdd`, `url`, `ip`, `s`) VALUES (NULL, \'TL-WR840N_V1_141120\', \'\', \'\', \'\', \'https://static.tp-link.com/resources/software/TL-WR840N_V1_141120.zip\', \'\', \'\');', '', '1');");
?>

    <div class="row" style="margin-bottom: 5%;">
        <div style="margin-left: 5%;">
            <h3>Firmware:</h3>
        </div><br><br>
        <div class="col-md-10" style="margin:auto;">
        <div class="list-group" style="direction: ltr; text-align: left;">
<?php
    $q = $sqli->query("SELECT * FROM `software` WHERE `s` = 1");
        while ($FetchQuery = $q->fetch_array()) {
            $i['id'] = $FetchQuery['id'];
            $i['name'] = $FetchQuery['name'];
            $i['icon'] = $FetchQuery['icon'];
            $i['description'] = $FetchQuery['description'];
            $i['url'] = $FetchQuery['url'];
            $i['timeAdd'] = $FetchQuery['timeAdd'];
            $i['ip'] = $FetchQuery['ip'];


            echo '
                <a href="./download.php?f='.$i['id'].'" class="list-group-item disabled"><i class="fa fa-box"></i>   '.$i['name'].'</a>
            ';


    } // End while
?>
<!-- <a href="./download.php?f=1" class="list-group-item disabled"><i class="fa fa-box"></i>   First item</a> -->
</div>
        </div>


    </div>

<?php
    include("./ext/pages/footer.php");
?>