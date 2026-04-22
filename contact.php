<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Contatto - test",
  "meta_description": "Mettiti in contatto"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/contact.php';
require __DIR__ . '/includes/layout.php';