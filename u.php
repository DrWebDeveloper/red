<?php

$dom = $_SERVER['SERVER_NAME'];
$site_id = 0; // default
switch ($dom)
{
    case 'app.redacteuronline.com':
        $site_id = 'https://app.redacteuronline.com/';
        break;
    case 'ikoproject.com':
        $site_id = 'https://ikoproject.com/';
        break;
    default:
    $site_id = 'https://app.redacteuronline.com/';
        break;
}

define('APP_BASE_URL', $site_id);
echo APP_BASE_URL;
?>