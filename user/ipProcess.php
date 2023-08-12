<?php
$ip = $_POST['ip'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/".$ip);
$out = curl_exec($ch);
curl_close($ch);

$o = json_decode($out,TRUE);
// echo "<pre>";
// print_r($o);
// echo "</pre>";
$country=$o['country'];
$region=$o['regionName'];
$city=$o['city'];
$zip=$o['zip'];
$lon=$o['lon'];
$lat=$o['lat'];


echo "
<div class='row'>
    <div class='col-md-12'>
        <h3>Your Detail are:</h3>
        <table class='table table-striped'>
            <tr>
                <th>IP</th>
                <th>Country</th>
                <th>RegionName</th>
                <th>city</th>
                <th>zip</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th></th>
            </tr>
            <td>$ip</td>
            <td>$country</td>
            <td>$region</td>
            <td>$city</td>
            <td>$zip</td>
            <td>$lon</td>
            <td>$lat</td>
        </table>
    </div>
</div> 
";
?>