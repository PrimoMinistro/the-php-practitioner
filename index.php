<?php

require 'core/bootstrap.php';

$tasks = $app['database']->selectAll('todos');

$users = $app['database']->selectAll('users');

$usersCount = count($users);

require Router::load('routes.php')->direct(Request::uri(), Request::method());