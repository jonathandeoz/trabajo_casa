<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Producto Nuevo</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/producto_nuevo.js"></script>
</head>

<body>
	
	<u><h1>Gestion de Productos</h1></u>	
	
	<form method="POST" action="registro_producto_nuevo.php" id="registro" name="registro">
	
	<select name="format" id="format">
	
    <option value="1">Formato 1</option>
	<option value="2">Formato 2</option>
	<option value="3">Formato 3</option>
	<option value="4">Formato 4</option>
	<option value="5">Formato 5</option>
	<option value="6">Formato 6</option>
	<option value="7">Formato 7</option>
	<option value="8">Formato 8</option>
	<option value="9">Formato 9</option>
	<option value="10">Formato 10</option>
	
	</select>

    <input type="button" id="carga_data" name="carga_data" value="Mostrar Formatos"/><br><br>	
	
	<table border="1" cellspacing="0" id="lista_prod" class="lista_prod" >
	
	<thead>
	<tr>
	
	
	<th>Producto1</th>
	<th>Producto2</th>
	<th>Producto3</th>
	<th>PRODUCTO</th>
	<th>Codigo1</th>
	<th>Codigo2</th>
	<th>Estado</th>
	<th>Eliminar</th>
	
	</tr>
	</thead>

	</table><br>
	
	<input type="button" value="Agregar Motivo" id="agrega"/>
	<input type="hidden" id="nuevos" name="nuevos" value="0"/>
	<input type="submit" id="registrar" value="Grabar cambios"/>
	
	</form>

</body>
</html>