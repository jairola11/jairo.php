<?php
$edad = readline("Introduce tu edad: "); 
if ($edad >= 18) { 
  echo "Eres mayor de edad. ";
  
  $licencia = readline("¿Tienes licencia de conducir? (responde si o no): "); 

  if (strtolower($licencia) === "si") { 
    echo "Tienes licencia de conducir.";
  } else { 
    echo "No tienes licencia de conducir.";
  }
} else { 
  echo "Eres menor de edad y no puedes conducir.";
}
?>