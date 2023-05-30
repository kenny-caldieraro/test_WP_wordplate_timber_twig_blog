<?php

$context = \Timber\Timber::context();
$context['error404'] = 'rien à voir ici';

\Timber\Timber::render('pages/404.twig', $context);