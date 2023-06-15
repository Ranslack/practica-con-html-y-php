<?php 
//va a ser cargado de manera asincrona

      
                
echo "<h1>Elemento Cargado </h1>";

echo ' 
    <select id="paises">
            <option value="0">Selecciona una opcion</option>
        <optgroup label="Latino america"></optgroup>
            <option value="Mexico">Mexico</option>
            <option value="Colombia">Colombia</option>
            <option value="Brasil">Brasil</option>
            <option value="Argentina">Argentina</option>
            <option value="Venezuela">Venezuela</option>
        <optgroup label="Europa"></optgroup>
            <option value="España">España</option>
            <option value="Francia">Francia</option>
            <option value="Alemania">Alemania</option>
            <option value="Belgica">Belgica</option>
            <option value="Portugal">Portugal</option>
        <optgroup label="Asia"></optgroup>
            <option value="China">China</option>
            <option value="India">India</option>
            <option value="Rusia">Rusia</option>
            <option value="Japon">Japon</option>
    </select>
  ';
 ?>

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

