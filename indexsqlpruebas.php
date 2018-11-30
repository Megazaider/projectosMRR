<?php 

	$conexion=mysqli_connect('localhost','root','','modelos');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>ID_modelo</td>
			<td>categoria</td>
			<td>precio</td>
			<td>descripcion</td>
			<td>imagen</td>	
		</tr>

		<?php 
		$sql="SELECT * from modelo";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID_modelo'] ?></td>
			<td><?php echo $mostrar['categoria'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
			<td><?php echo $mostrar['IMAGEN1'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>