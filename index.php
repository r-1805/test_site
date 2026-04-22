<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "test",
  "meta_description": "Pulizia degli uffici e finestre operative realistiche . Il profilo pubblico mette in evidenz a . Italia with consistent branding, reachable contact data and a p"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/index.php';
require __DIR__ . '/includes/layout.php';