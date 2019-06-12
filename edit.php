<?php
    require_once('function.php');
    require_once('Models/Todo.php');

    $id = $_GET['id'];

    $todo = new Todo();
    $task = $todo->get($id);


    ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO APP</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="px-5 bg-primary">
        <nav class="navbar navbar-dark">
            <a href="index.php" class="navbar-brand">TODO APP</a>
            <div class="justify-content-end">
                <span class="text-light">
                    SeedKun
                </span>
            </div>
        </nav>
    </header>
    <main class="container py-5">
        <section>
            <form class="form-row" action="update.php" method="POST">
                <div class="col-12 col-md-9 py-2">
                    <input type="text" name="task" class="form-control" placeholder="ADD TODO" value="<?php echo h($task['name'])?>">
                </div>
                <input type="hidden" name="id" value="<?php echo h($task['id'])?>">
                <div class="py-2 col-md-3 col-12">
                    <button type="submit" class="col-12 btn btn-primary btn-block">UPDATE</button>
                </div>
            </form>
        </section>
    </main>
    
    <script src="assets/js/app.js"></script>
</body>
</html>