<?php
//verifico se esiste un database json, se presente salvo la
//stringa nel file json in una var $string e la decodifico
//in array associativo per php assegnandola poi a $todoList

//se non esiste un file database.json creo un array vuoto $todoList

if(file_exists('./database.json')){
    $string = file_get_contents('database.json');
    $todoList = json_decode($string, true);
}else{
    $todoList = [];
}

// doThat();

if(isset($_POST['item']['item'])){
    //pusho dentro l'array i valori arrivati con POST axios
    $todoList[] = [
        'item' => $_POST['item']['item'],
        'done' => $_POST['item']['done'] === 'false'?false:true,
    ];
    $myString = json_encode($todoList);
    file_put_contents('database.json', $myString);

}

// function doThat(){
    //controllo se in $_POST['item'] ce un valore
    // if(isset($_POST['item']['item'])){
    //     //pusho dentro l'array i valori arrivati con POST axios
    //     $todoList[] = [
    //         'item' => $_POST['item']['item'],
    //         'done' => $_POST['done']['done'] === 'false'?false:true,
    //     ];
    // }
    // else if(isset($_POST['done'])){
    //     $todoList[] = [
    //         'item' => $_POST['item']['item'],
    //         'done' => $_POST['done']['done'] === 'false'?true:false,
    //     ];
    // }
// }
//controllo se è arrivata una chiamata $_POST['done']

    
    


//comunico al browser che tipo di intestazione riceverà al campo
//Content-Type e setto application/json
header('Content-Type: application/json');

//in output mando il contenuto della variabile $todoList codificandolo
//in una stringa con la funzione json_encode
echo json_encode($todoList);


?>
