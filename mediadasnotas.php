<?php
    $m = (($_POST["n1"]*$_POST["p1"])+($_POST["n2"]*$_POST["p2"])+($_POST["n3"]*$_POST["p3"]))/($_POST["p1"]+$_POST["p2"]*$_POST["p3"]);
    echo "<h1>Sua Media:</h1>"."<h1>$m</h1>";
    $n1=$_POST["nt1"];
    $n2=$_POST["nt2"];
    $n3=$_POST["nt3"];
    
    ?>