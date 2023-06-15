<?php
if(isset($_POST['imagen'])) {
  
    // code...
    $imagen = $_POST['imagen'];
  
  $ruta_imagen = "Banderas/".$imagen.".png";

  $imagen_codificada = base64_encode(file_get_contents($ruta_imagen));
  echo 'data:image/jpeg;base64,'.$imagen_codificada;
  }
  

?>