<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TODO List</title>
</head>
<body>
    
    <div id="app">
        
    <div class="container">

        <div class="wrapper">
            <h1>Lista del Frontendista</h1>
            <!-- ciclo l'array todoList con vue e ne stampo ogni element -->
            <ul>
                <li v-for="todo in todoList">{{ todo }}</li>
            </ul>

            <div class="my-form">
                <input type="text" v-model="newTask" @keyup.enter="addTask()">
                <button type="button" @click="addTask()">Aggiungi alla lista</button>
            </div>
        </div>

    </div>




    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./main.js"></script>
</body>
</html>