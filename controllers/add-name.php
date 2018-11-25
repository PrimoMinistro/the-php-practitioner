<?php

$app['database']->insertInto('users', [
    'name' => $_POST['name']
]);

header('Location: /');