<?php

// Bootstrap file for the application

// Autoload dependencies
require __DIR__.'/../vendor/autoload.php';

// Set up the application
$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

return $app;