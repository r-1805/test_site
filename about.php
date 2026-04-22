<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Chi siamo - test",
  "meta_description": "Italia . Case pulite scintillanti with realistic business identit y , service scope, and complianc e signals consistent for visitors in evidenza Pulizia degli u"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/about.php';
require __DIR__ . '/includes/layout.php';