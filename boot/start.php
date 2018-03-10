<?php

// Include WriteDown's dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Load the environment variables
$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

// Get the WriteDown object
$writedown = new WriteDown\WriteDown;

// Set-up bits and bobs
require_once __DIR__ . '/container.php';
require_once __DIR__ . '/routes.php';
