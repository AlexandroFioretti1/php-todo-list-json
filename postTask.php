<?php

$todoThings = "./task.json";

$tasks = json_encode($_POST);

header('Content-Type: application/json');

echo $tasks;
