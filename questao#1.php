<?php 
$p=$_POST["p1"];
$i=$_POST["i1"];
$t=$_POST["t1"];
$dm = $p*((1+$i)*$t);
echo "o resultado é ".$dm;
?>
