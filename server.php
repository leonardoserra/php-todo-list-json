<?php
//creo hardcode lista di valori
$todoList = [
    'fai la spesa',
    'allenati',
    'chiama la mamma',
    'compra regalo per Sara'
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
