<?php
define("c", 3);
//if(isset($_POST['submitdecrypt'])){
$alphabet = array(" ", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
if(!empty($_POST['messagetodecrypt'])) {
    $message = $_POST['messagetodecrypt'];
    $message = str_split($message);
    foreach ($message as $mes => $value) {
        $serialnum1[] = (array_search($value, $alphabet) - c + sizeof($alphabet)) % sizeof($alphabet);
    }
    foreach ($serialnum1 as $s => $val) {
        //if(array_search($val, array_keys($alphabet))) {
        $seqindexdecrypt[] = $alphabet[$val];
        //}
    }
    $seqindexdecrypt = implode($seqindexdecrypt);
    $resultdecrypt = array('textdecrypt' => $seqindexdecrypt,);
    echo json_encode($resultdecrypt);
}
//}
?>