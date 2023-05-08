<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <title>ToDo List</title>
</head>

<body>
    <div id="app">
        <div class="container text-center py-5">
            <h1>Todo List</h1>
        </div>
        <div class="container text-center border bg-light">
            <ul class="list-unstyled bg-light">
                <li v-for="task in tasks" class="d-flex align-items-center justify-content-between ">
                    <p>{{task.daFare}}</p>
                    <button class="btn">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </li>
            </ul>
        </div>
        <div class="container py-3">
            <div class="input-group">
                <input v-model="ContenutoNewTask" type="text" class="form-control text-center" id="InputAmount" placeholder="Aggiungi qualcosa da fare">
                <button @click="SendNewTask" type="submit" class="btn btn-primary">Invia</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.global.min.js"></script>
    <script src="./app.js"></script>

</body>

</html>