<?php

require_once('Models/Todo.php');

$id = $_GET['id'];

$todo = New Todo;

$todo->delete($id);

header("Location:index.php");