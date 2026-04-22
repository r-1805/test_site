<?php
declare(strict_types=1);
http_response_code(404);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Archivio - test",
  "meta_description": "Archive page is intentionally not available"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/news-archive.php';
require __DIR__ . '/includes/layout.php';