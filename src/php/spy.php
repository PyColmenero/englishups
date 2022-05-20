<?php
 
    $comefrom = $_POST["url"];
 

    $link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // GET EVERY DATA
    $user_ip = getenv('REMOTE_ADDR');
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $city = $geo["geoplugin_city"];

    // IF NO ERROR AND NOT MY IP
    if ($geo && $geo['geoplugin_status'] == '200' && $geo["geoplugin_request"] != "90.106.172.71" && $geo["geoplugin_request"] != "84.78.26.51" && $geo["geoplugin_request"] != "2a01:c50f:d540:8700:4981:fd3c:6183:f444" && $geo["geoplugin_request"] != "2a01:c50f:d540:8700:544:8694:51d2:f157") {

        // BUILD SENTENCE
        $sentencia = "INSERT INTO users_data VALUES( NULL";
        foreach (array_keys($geo) as $data) {
            if($data != "geoplugin_credit" && $data != "geoplugin_status" && $data != "geoplugin_delay" && $data != "geoplugin_inEU" && $data != "geoplugin_euVATrate" && $data != "geoplugin_currencySymbol" && $data != "geoplugin_currencySymbol_UTF8" && $data != "geoplugin_currencyConverter"){
                $sentencia .= ", '" . $geo[$data] . "'";
            }
        }
        $sentencia .= ",'$comefrom' ,NOW());";
        
        // CONECCTION DATA
        $database_user = 'u254792697_coopolarway';
        $database_pasw = 'ColmeHost06.';
        $database_name = 'u254792697_mydaytoday';
        $database_port = '3306';
        
        // INSERT
        $con = mysqli_connect('localhost', $database_user, $database_pasw);
        mysqli_select_db($con, $database_name);
        mysqli_query($con, $sentencia);
        echo "ok " . $geo["geoplugin_request"];
    } else {
        echo "<b>BANNED ".$geo['geoplugin_request']."</b> </br>";
        echo "<b>".$geo['geoplugin_status']."</b>";
    }

?>
