<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Servizi - test",
  "meta_description": "Pulizia delle case, Pulizia dei tappeti, Pulizia degli uffici"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/services.php';
require __DIR__ . '/includes/layout.php';