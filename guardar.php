<?php
// CONEXION A LA BASE 
	//conectar servidor
   $usuario = "id8064791_root";
   $contrasena = "infernus";  
   $servidor = "localhost";
   $basededatos = "id8064791_modelos";

	$conexion = mysqli_connect( $servidor, $usuario, $contrasena )  or die ("No se ha podido conectar al servidor de Base de datos");
	//verificar
		
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );







//captura de fomulario de subida. 

    



	$id_modelo=$_POST['ID_modelo'];
	$nombre=$_POST['NOMBRE'];
	$categoria=$_POST['categoria'];
	$precioR=$_POST['PRECIO_rebajado'];
	$precioO=$_POST['PRECIO_original'];
	$descripcion=$_POST['descripcion'];



	$checkGuardar=$_POST['deletestoc']; /// guardar o eliminars
	if($checkGuardar=='ingresar'){



      $target_path = "imgUP/";
      $target_path = $target_path . basename( $_FILES['foto1']['name']); 
      
      if(move_uploaded_file($_FILES['foto1']['tmp_name'], $target_path))
       {
        echo "El archivo ". basename( $_FILES['foto1']['name']). " ha sido subido";

    	} else{
		echo "imagen 1 : Ha ocurrido un error!";
		}		
	//sentencia sql

     $imaguen1=basename( $_FILES['foto1']['name']);



      $target_path = "imgUP/";
      $target_path = $target_path . basename( $_FILES['foto2']['name']); 

      if(move_uploaded_file($_FILES['foto2']['tmp_name'], $target_path))
       {
        echo "El archivo ". basename( $_FILES['foto2']['name']). " ha sido subido";

    	} else{
		echo "imagen 2 : Ha ocurrido un error!";
		}		
	//sentencia sql

     $imaguen2=basename( $_FILES['foto2']['name']);


      $target_path = "imgUP/";
      $target_path = $target_path . basename( $_FILES['foto3']['name']); 

      if(move_uploaded_file($_FILES['foto3']['tmp_name'], $target_path))
       {
        echo "El archivo ". basename( $_FILES['foto3']['name']). " ha sido subido";

    	} else{
		echo "imagen 3 : Ha ocurrido un error!";
		}		
	//sentencia sql

     $imaguen3=basename( $_FILES['foto3']['name']);


















	$sql="INSERT INTO modelo VALUES('$id_modelo','$nombre','$categoria','$precioR','$precioO','$descripcion','$imaguen1','$imaguen2','$imaguen3')";
	//ejecutar
	$ejecutar= mysqli_query($conexion,$sql);
	//verificar ejecutar
	if(!$ejecutar){
		echo "error al ejecutar";

	}else{
		echo "  datos guardados <br><a href='index.php'>volver a main</a>";
	}
    }else{
		$sql=("DELETE FROM modelo WHERE ID_modelo='$id_modelo'")or die(mysql_error()); 
		//ejecutar
		$ejecutar= mysqli_query($conexion,$sql);
		//verificar ejecutar
		if(!$ejecutar){
		echo "error al ejecutar";

		}else{
		echo "  datos guardados <br><a href='index.php'>volver a main</a>";
		}
    	
    }

?>