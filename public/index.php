<?php
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

require '../app/Router.php';

(new Router)->direct();
