<?php

App::get('database')->insertInto('users', [
    'name' => $_POST['name']
]);

header('Location: /');