<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Disclaimer - test",
  "meta_description": "Italy"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/disclaimer.php';
require __DIR__ . '/includes/layout.php';