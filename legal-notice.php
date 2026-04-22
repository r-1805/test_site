<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Nota legale - test",
  "meta_description": "Italian Data Protection Authority"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/legal-notice.php';
require __DIR__ . '/includes/layout.php';