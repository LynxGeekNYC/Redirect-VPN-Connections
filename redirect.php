<?php

function is_vpn() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://ipinfo.io/{$ip}/json";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    return isset($data['org']) && strpos($data['org'], 'VPN') !== false;
}

if (is_vpn()) {
    header("Location: http://www.example.com/vpn-restricted");
    exit;
}

?>
