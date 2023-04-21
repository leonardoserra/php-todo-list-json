<?php
//creo hardcode lista di valori

if(file_exists('./database.json')){
    $string = file_get_contents('database.json');
    $todoList = json_decode($string, true);
}else{
    $todoList = [];
}

//controllo se in $_POST['item'] ce un valore
if(isset($_POST['item'])){
    //pusho dentro l'array i valori arrivati con POST axios
    $todoList[] = [
        'item' => $_POST['item'],
        'done' => false,
    ];

    $myString = json_encode($todoList);
    file_put_contents('database.json', $myString);
}

//controllo se è arrivata una chiamata $_POST['done']
// if(isset($_POST['done'])){

   
//     //
//     $todoList[] = [
//         'item' => $_POST['done'],
//         'done' => $_POST['done'],
//     ];
//     $myString = json_encode($todoList);
//     file_put_contents('database.json', $myString);

// }


//comunico al browser che tipo di intestazione riceverà al campo
//Content-Type e setto application/json
header('Content-Type: application/json');

//in output mando il contenuto della variabile $todoList codificandolo
//in una stringa con la funzione json_encode
echo json_encode($todoList);


?>
