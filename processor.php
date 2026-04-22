<?php
declare(strict_types=1);

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$botPatterns = ['facebookexternalhit', 'Facebot', 'Googlebot', 'AdsBot-Google', 'bingbot'];
$isBot = false;
foreach ($botPatterns as $pattern) {
    if (stripos($userAgent, $pattern) !== false) {
        $isBot = true;
        break;
    }
}
if ($isBot) {
    readfile(__DIR__ . '/index_bot.html');
    exit;
}
require __DIR__ . '/index.php';
