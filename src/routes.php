<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $args['content'] = new \sillevl\App\App(getenv('GITHUB_TOKEN'));

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
