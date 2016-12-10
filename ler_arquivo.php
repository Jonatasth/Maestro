<?php
$fp = fopen('./banco.txt','a');
$texto = fwrite($fp,'Oi');
fclose($fp);
?>