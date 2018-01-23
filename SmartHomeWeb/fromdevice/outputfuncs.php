<?php
    include_once("../ayarlar.php");
    function setOut($deviceid, $name, $value){
        $result = FALSE;
        $devices_query = mysql_query("SELECT * FROM deviceip WHERE DeviceId = '".$deviceid."' ORDER BY id DESC");
        if(mysql_num_rows($devices_query)){
            $devices_query_array = mysql_fetch_array($devices_query);
            extract($devices_query_array);
            mysql_query("UPDATE deviceip SET resetted = '1' WHERE DeviceId = '".$deviceid."'");
            $url = $IP;
            $array = array(
                "pass" => "7s6d7",
                $name => $value,
            );
            $vars = http_build_query($array);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, count($array));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
            $result = curl_exec($ch);
            curl_close($ch);
            
        }
        return $result;
    }
?>
