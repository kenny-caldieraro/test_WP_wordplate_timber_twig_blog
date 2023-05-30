<?php

$context = \Timber\Timber::context();
$context['posts'] = new \Timber\PostQuery();
$context['categories'] = \Timber\Timber::get_terms('category');
$context['prev'] = true;

\Timber\Timber::render('pages/index.twig', $context);