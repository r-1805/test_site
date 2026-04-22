<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Informativa sulla privacy - test",
  "meta_description": "Italy"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/privacy-policy.php';
require __DIR__ . '/includes/layout.php';