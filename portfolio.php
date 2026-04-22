<?php
declare(strict_types=1);
$site = require __DIR__ . '/config/site.php';
$page = json_decode(<<<'JSON'
{
  "title": "Portefeuille - tt",
  "meta_description": "Campagne e-commerce, Lancement de marque, Optimisation SEO"
}
JSON, true);
$page['body_partial'] = __DIR__ . '/partials/portfolio.php';
require __DIR__ . '/includes/layout.php';