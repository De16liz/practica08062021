<?php

$fp = fopen("fichero.html", "w");
fputs($fp, "<b>Deimi  Lizeth</b>  <br><br>");
fputs($fp, "Gomez Diaz");
fclose($fp);//cierra un archivo abierto