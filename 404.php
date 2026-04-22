<?php
declare(strict_types=1);
http_response_code(404);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "404 - test",
  "meta_description": "Pagina non trovata"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/404.php';
require __DIR__ . '/includes/layout.php';