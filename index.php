<?php
require("lib.php");
$pdo=PDOConnect();
$pdo=PDOConnect();
sleep(01);
echo "<pre>";
var_dump($pdo);
echo (number_format( timeLapsed()*1000, 4 ) . "ms" );
 ?>
