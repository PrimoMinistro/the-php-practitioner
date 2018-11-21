<?php

require 'core/bootstrap.php';

$tasks = $app['database']->selectAll('todos');

require Router::load('routes.php')->direct(Request::uri());