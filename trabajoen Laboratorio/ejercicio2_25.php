<?php
  // En PHP no se efectua calculos en las cadenas
  $numero = 4 + 1;
  $cadena = "4 + 1";
  if($numero == $cadena){
      print "<p>$numero y $cadena son iguales.</p>\n";
   }else{
      print "<p>$numero y $cadena son distintos.</p>\n";
   }
 
?>