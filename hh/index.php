<?php
var_dump($_GET['data']);
$fp = fopen('data.txt', 'w');
fwrite($fp, $_GET['data']);
fclose($fp);
?>