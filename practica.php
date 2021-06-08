<?php


// escribe un archivo en el disco
    $fp = fopen('data1.html', 'w');//1.parametro crea y 2.escribe
    fwrite($fp, 'hola');//escritura de un archivo
    fwrite($fp, '23');
    fclose($fp);//cierra un archivo abierto