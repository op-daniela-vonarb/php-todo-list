<?php

$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);

if ($todoName) {
    $json = file_get_contents('todo.json');
    $jsonArray = json_decode($json, true);
    $jsonArray[$todoName] = ['completed' => false];
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
}