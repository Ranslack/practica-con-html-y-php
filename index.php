<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 1 JavaScrip</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<script src="jquery.js" type="text/javascript"></script>-->
	
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" type="text/javascript"></script> 
	
</head>
<body>	
	<button id="cargador" type="button" class="btn btn-primary"> cargar memoria local</button>
	<button id="cargadorphp" type="button" class="btn btn-primary"> cargar PHP</button>

	<table id="sesion"></table>
	<section id="contenerdor"></section>

	<section id="bandera">

	
	<img id="imagen_mostrada" src="">
	</section>
	
	


	<script type="text/javascript">
        //funcion anonima porque no tiene nombre de la funcion
        $(function () {
            //alert("Hola Mundo con Js");

            demo("yaser"); //aqui invoco la funcion.
            $('#cargador').click(function () {
                $('#sesion').empty(); //limpia los elementos
                $('#sesion').append('<tr><th>Clave: </th><th> Valor: </th></tr>'); //limpia los elementos
                $('#sesion').append('<tr><td>Usuario: </td><td>' + localStorage.getItem('usuario') + '</td></tr>');
            });

            $("#cargadorphp").click(function(){
            	$("#contenerdor").load("fuente.php"); 	
            });

        });
        

        //funcion llamada demo
        function demo(nombre) {
            console.log("Bienvenido: " + nombre);
            sessionStorage.setItem('usuario', nombre);//alamcenamiento local
            localStorage.setItem('usuario', nombre); //allmacenamiento local
        }

    </script>


		 

    
	
</body>
</html>