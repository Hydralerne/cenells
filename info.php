<?php

function get_browser_name($user_agent)
{

    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Microsoft Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Google Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Apple Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Mozilla Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';  
    return 'Other';
}

$browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);

$agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/Netscape/i', $agent)) {
    $browser = "Netscape";
}	


function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();


?>

<?php

$impoinfo = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=156.199.242.153");

$state = $impoinfo->geoplugin_status;
$city = $impoinfo->geoplugin_city;
$region = $impoinfo->geoplugin_region;
$areacode = $impoinfo->geoplugin_areaCode;
$dmacode = $impoinfo->geoplugin_dmaCode;
$countrydode = $impoinfo->geoplugin_countryCode;
$countryname = $impoinfo->geoplugin_countryName;
$continentcode = $impoinfo->geoplugin_continentCode;
$latitude = $impoinfo->geoplugin_latitude;
$longitude = $impoinfo->geoplugin_longitude;
$regioncode = $impoinfo->geoplugin_regionCode;
$regionname = $impoinfo->geoplugin_regionName;
$currencycode = $impoinfo->geoplugin_currencyCode;
$cysymbol = $impoinfo->geoplugin_currencySymbol;
$cysymbolutf = $impoinfo->geoplugin_currencySymbol_UTF8;
$Converter = $impoinfo->geoplugin_currencyConverter;


?>
