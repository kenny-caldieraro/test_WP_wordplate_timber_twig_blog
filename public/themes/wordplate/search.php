<?php

$context = Timber\Timber::context();
$search = esc_attr(get_search_query());

$args = array(
    'post_type' => 'post',
    's' => $search,
);
$context['posts'] = Timber\Timber::get_posts($args);
$context['search'] = $search;


Timber\Timber::render('pages/search.twig', $context);