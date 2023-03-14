<?php 

$list = file_get_contents( __dir__ . "/../data/todo.json");

header('Content-Type: application/json; charset=utf-8');

echo $list;