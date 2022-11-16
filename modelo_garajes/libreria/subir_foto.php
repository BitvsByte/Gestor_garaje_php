<?php
// //inicializar variables a utilizar en el documento html
// $nombre_fichero = 'coches.json';
// //comprobar si nos llega el formulario
// if (isset($_POST['enviar'])) {
//     //recuperar los datos del formulario

// 	echo '<pre>';
// 	print_r($_FILES);
// 	echo '</pre>';
// 	//Leemos la foto introducida
//   	if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK)
//   	{
//     	// get details of the uploaded file
//     	$fileTmpPath = $_FILES['foto']['tmp_name'];
//     	$fileName = $_FILES['foto']['name'];
//     	$fileSize = $_FILES['foto']['size'];
//     	$fileType = $_FILES['foto']['type'];
//     	$fileNameCmps = explode(".", $fileName);
//     	$fileExtension = strtolower(end($fileNameCmps));

//     	// sanitize file-name
//     	$newFileName = md5(time() . $fileName) . '.' . $fileExtension;

//     	// check if file has one of the following extensions
//     	$allowedfileExtensions = array('jpg', 'gif', 'png','jpeg');

//     	if (in_array($fileExtension, $allowedfileExtensions))
//     	{
//       		// directory in which the uploaded file will be moved
//       		$uploadFileDir = './imagenes/';
//       		$dest_path = $uploadFileDir . $newFileName;

//       		if(move_uploaded_file($fileTmpPath, $dest_path)) 
//       			{
// 					    $image = new Imagick($dest_path);
// 			    		$image->cropThumbnailImage(75,75);
// 	    	    		$image->writeImage($uploadFileDir.'/imagenes_peque/'.$newFileName);
// 				//$miniatura = $image;
				
//         		$mensa ='File is successfully uploaded.';
//       			}
//       		else 
//       		{
//         		$mensa = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
//       		}
//     	}
//     	else
//     	{
//       		$mensa = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
//     	}
//   	}
//   	else
//   	{
//   	  $mensa = 'There is some error in the file upload. Please check the following error.<br>';
//   	  $mensa .= 'Error:' . $_FILES['foto']['error'];
//   	}	
	
	
	
	

// 	//Guardamos los datos en un archivo
// 	//Leemos el fichero de personas
// 	if (file_exists($nombre_fichero)) {
// 		$cochess = json_decode(file_get_contents($nombre_fichero), true);
// 	}
// 		//echo '<pre>';
// 		//echo 'Antes de llamar el array';
// 		//print_r($personas);
// 		$cochee_temp = array (

// 			'nombre_img'=>$newFileName
// 		);
// 		$cochess[]=$cochee_temp;	
	
// 		file_put_contents($nombre_fichero,json_encode($cochess));

// }













?>