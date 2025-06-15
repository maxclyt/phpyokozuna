<?php
    $m = ((($_POST["nt1"]*$_POST["pt1"])+($_POST["nt2"]*$_POST["pt2"])+($_POST["nt3"]*$_POST["pt3"]))/($_POST["pt1"]+$_POST["pt2"]+$_POST["pt3"]));
    echo "<h1>Sua Media:</h1>"."<h1>$m</h1>";
    if ($m >= 6){
    echo "<h1>Aprovado</h1>";
     }
    else { 
    echo"<h1>Reprovado</h1>";
     }

    ?>
