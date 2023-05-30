<?php

$context = \Timber\Timber::context();
$context['posts'] = new \Timber\PostQuery();
$context['prev'] = true;

\Timber\Timber::render('pages/index.twig', $context);