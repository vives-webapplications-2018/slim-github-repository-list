<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

$app->add( function($request, $response, $next){
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
    $dotenv->load();

    return $next($request, $response);
});
