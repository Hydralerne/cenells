<?php


date_default_timezone_set('Africa/Cairo');
$timedate = date("Y-m-d H:i:s");
$id = $info['id'];

function get_browser_name($user_agent)
{

    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return '2';
    elseif (strpos($user_agent, 'Edge')) return '3';
    elseif (strpos($user_agent, 'Chrome')) return '1';
    elseif (strpos($user_agent, 'Safari')) return '4';
    elseif (strpos($user_agent, 'Firefox')) return '5';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return '6';  
    return '8';
}

$browser = get_browser_name($_SERVER['HTTP_USER_AGENT']);

$agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/Netscape/i', $agent)) {
    $browser = "7";
}else {}


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

$system_user_agent = $_SERVER['HTTP_USER_AGENT'];

function getsystem() { 

    global $system_user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 10/i'     =>  'w10',
                            '/windows nt 6.3/i'     =>  'w8.1',
                            '/windows nt 6.2/i'     =>  'w8',
                            '/windows nt 6.1/i'     =>  'w7',
                            '/windows nt 6.0/i'     =>  'wv',
                            '/windows nt 5.2/i'     =>  'ws',
                            '/windows nt 5.1/i'     =>  'wx',
                            '/windows xp/i'         =>  'wx',
                            '/windows nt 5.0/i'     =>  'w2',
                            '/windows me/i'         =>  'wm',
                            '/win98/i'              =>  'w98',
                            '/win95/i'              =>  'w95',
                            '/win16/i'              =>  'w3',
                            '/macintosh|mac os x/i' =>  'mcx',
                            '/mac_powerpc/i'        =>  'mc9',
                            '/linux/i'              =>  'li',
                            '/ubuntu/i'             =>  'ub',
                            '/iphone/i'             =>  'ipn',
                            '/ipod/i'               =>  'ipo',
                            '/ipad/i'               =>  'ipa',
                            '/android/i'            =>  'adr',
                            '/blackberry/i'         =>  'blc',
                            '/webos/i'              =>  'mb'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $system_user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}

$user_os = getsystem();

$inset = mysql_query("INSERT INTO login(user_id,type,system,ip,browser,date) VALUES('$id','session','$user_os','$user_ip','$browser','$timedate')");

?>