<?php

$context = Timber\Timber::context();
$context['post'] = Timber\Timber::get_post();
$context['prev'] = false;

Timber\Timber::render('pages/single.twig', $context);