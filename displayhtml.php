<?php

function is_vpn() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://ipinfo.io/{$ip}/json";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return isset($data['org']) && strpos($data['org'], 'VPN') !== false;
}

if (is_vpn()) {
    echo '<h1>Access Denied</h1><p>VPN access is not allowed on this website.</p>';
}

?>

