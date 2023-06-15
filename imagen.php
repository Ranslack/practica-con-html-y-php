<!DOCTYPE html>
<html>
<head>
  <title>Selección de imagen asíncrona</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('select').on('change', function(){
        var imagen = $(this).val();
        $.ajax({
          type:'POST',
          url:'cargar_imagen.php',
          data:{imagen:imagen},
          success:function(response){
            $('#imagen_mostrada').attr('src', response);
          }
        });
      });
    });
  </script>
</head>
<body>
  <h1>Selección de imagen asíncrona</h1>
  <select>
    <optgroup label="Grupo 1">
      <option value="Mexico">Imagen 1</option>
      <option value="Colombia">Imagen 2</option>
      <option value="imagen3.jpg">Imagen 3</option>
    </optgroup>
    <optgroup label="Grupo 2">
      <option value="imagen4.jpg">Imagen 4</option>
      <option value="imagen5.jpg">Imagen 5</option>
      <option value="imagen6.jpg">Imagen 6</option>
    </optgroup>
  </select>
  <br><br>
  <img id="imagen_mostrada" src="">
</body>
</html>