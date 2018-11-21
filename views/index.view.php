<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            text-align: center;
            padding: 2em;
        }
    </style>
</head>
<body>
    <h1>Task for the day</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>

            <?php if ($task->completed) : ?>
                <li><strike><?= $task->description; ?></strike></li>
            <?php else: ?>
                <li><?= $task->description; ?></li>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>
</body>
</html>