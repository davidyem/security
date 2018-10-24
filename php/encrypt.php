<?php
define("c", 3);
//if(isset($_POST['submitencrypt'])){
$alphabet = array(" ", ".", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
if(!empty($_POST["messagetoencrypt"])) {
    $message = str_split(strtolower(trim($_POST["messagetoencrypt"]," ")));
    foreach ($message as $mes => $value) {
        $serialnum[] = (array_search($value, $alphabet) + c) % sizeof($alphabet);
    }
    foreach ($serialnum as $s => $val) {
        $seqindexencrypt[] = $alphabet[$val];
    }
    $seqindexencrypt = implode($seqindexencrypt);
    $resultencrypt = array('textencrypt' => $seqindexencrypt,);
    echo json_encode($resultencrypt);
}
//}
?>