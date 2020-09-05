<?php
var_dump($_GET['data']);
$fp = fopen('data.txt', 'a');
fwrite($fp, $_GET['data']."\n");
fclose($fp);
?>