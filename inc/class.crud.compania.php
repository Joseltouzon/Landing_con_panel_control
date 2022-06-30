<?php 
	class COMPANIA{
		
		
		// read
		public function read($link){
			$sql = "SELECT * FROM compania WHERE status = 1";
			$sq = mysqli_query($link, $sql);
			return $sq;
		}



		// delete
		public function delete($link, $id){
			$sql = "UPDATE compania SET status = 0 WHERE id = '$id'";
    		$sq = mysqli_query($link, $sql);
		}
        
        //create
		public function create($link, $titulo, $email, $whatsapp, $telefono, $direccion, $ciudad, $img, $img2, $img3, $facebook, $instagram, $youtube){
			$sql = "INSERT INTO compania (nombreEmpresa, emailContacto, whatsapp, telefono, direccion, ciudad, logo, logo2, favicon, status, facebook, instagram, youtube) VALUES ('$titulo', '$email', '$whatsapp', '$telefono', '$direccion', '$ciudad', '$img', '$img2', '$img3', 1, '$facebook', '$instagram', '$youtube')";  // echo $sql; 
			

            $sq = mysqli_query($link, $sql); 
            $id = mysqli_insert_id($link);
			
			if(!empty($img)){
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio= 'images/compania/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 

		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img']['tmp_name'],$directorio.'/'.$img);
		    }
			
    		if(!empty($img2)){
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio= 'images/compania/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 

		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img2']['tmp_name'],$directorio.'/'.$img2);
		    }

		    if(!empty($img3)){
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio= 'images/compania/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 

		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img3']['tmp_name'],$directorio.'/'.$img3);
		    }
		}

        //editar
		public function update($link, $titulo, $email, $whatsapp, $telefono, $direccion, $ciudad, $img, $img2, $img3, $id, $facebook, $instagram, $youtube){
			$sql = "UPDATE compania SET nombreEmpresa = '$titulo', emailContacto = '$email', whatsapp = '$whatsapp', telefono = '$telefono', direccion = '$direccion', ciudad = '$ciudad', facebook = '$facebook', instagram = '$instagram', youtube = '$youtube' ";

			if(!empty($img)){

				$sql .= ", logo = '$img' ";
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio= 'images/compania/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 

		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img']['tmp_name'],$directorio.'/'.$img);
			}

			if(!empty($img2)){

				$sql .= ", favicon = '$img2' ";
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio= 'images/compania/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 

		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img2']['tmp_name'],$directorio.'/'.$img2);
			}

			if(!empty($img3)){

				$sql .= ", logo2 = '$img3' ";
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio= 'images/compania/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 

		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img3']['tmp_name'],$directorio.'/'.$img3);
			}

			$sql .= "WHERE id = '$id'"; // echo $sql;
			
    		if(mysqli_query($link, $sql)){return true;}else{return false;}
		}

		// find
		public function find($link, $id){
			$sql = "SELECT * FROM compania WHERE id = $id "; // sql 
			$sq = mysqli_query($link, $sql);
			$s = mysqli_fetch_array($sq);
			return $s;
		}
	}
?>