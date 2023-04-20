<?php
//creo hardcode lista di valori
$todoList = [
    [
        'item' => 'fai la spesa',
        'done' => 'true'
    ],
    [
        'item' => 'allenati',
        'done' => 'false'
    ],
    [
        'item' => 'chiama la mamma',
        'done' => 'false'
    ],
    [
        'item' => 'compra regalo per Sara',
        'done' => 'false'
    ],
    
   
];

if(isset($_POST['item'])){
    $todoList[] = $_POST['item'];
}

//comunico al browser che tipo di intestazione riceverà al campo
//Content-Type e setto application/json
header('Content-Type: application/json');

//in output mando il contenuto della variabile $todoList codificandolo
//in una stringa con la funzione json_encode
echo json_encode($todoList);


?>
