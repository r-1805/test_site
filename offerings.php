<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Offres - tt",
  "meta_description": "Services SEO, Marketing sur les réseaux sociaux, Marketing numérique"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/offerings.php';
require __DIR__ . '/includes/layout.php';