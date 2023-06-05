<?php
    // index.php
    include_once("NumeroEntero.php");
    $n1 = new NumeroEntero(3);
    $n2 = new NumeroEntero(5);
    echo $n1->getNe();
    echo $n2->getNe();
?>