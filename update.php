<?php

require_once('Models/Todo.php');

$task = $_POST['task'];
$id = $_POST['id'];

$todo = new Todo();

$todo->update($task,$id);

header('Location:index.php');
