<?php

$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);

if ($todoName) {
    $json = file_get_contents('todo.json');
    echo $json;
    // file_put_contents('todo.json')
}