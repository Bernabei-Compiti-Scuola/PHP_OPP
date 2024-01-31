<?php
    include "Alunno.php";
    $alunni= [];
    $alunni [0] = new Alunno("Mario", "Rossi", 18);
    $alunni [1] = new Alunno("Luca", "Verdi", 19);
    $alunni [2] = new Alunno("Giovanni", "Bianchi", 20);

    for($i=0; $i<3; $i++)
    {
        echo $alunni[$i]->toString();
    }
?>