<?php

require_once('Models/Todo.php');

$task = $_POST['task'];

$todo = new Todo;

$todo->create($task);

header('Location:index.php');