<?php
$todoThings = "./task.json";
$tasks = json_encode($_POST);
file_put_contents($todoThings, $tasks);
echo $tasks;
