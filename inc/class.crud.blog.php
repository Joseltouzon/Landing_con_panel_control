<?php 
	class BLOG{ 
		
		
		// read

		public function read($link){
			$sql = "SELECT * FROM blog WHERE status = 1 ORDER BY posicion ASC"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

		public function read2($link){
			$sql = "SELECT * FROM blog WHERE status = 1 ORDER BY posicion DESC LIMIT 4"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

        //find
		public function find($link, $id){
			$sql = "SELECT * FROM blog WHERE id = '$id'";
			$sq = mysqli_query($link, $sql);
			$s  = mysqli_fetch_array($sq);

			return $s;
		}

		// create new
		public function create($link,$titulo, $fecha, $cancion, $posicion, $intro, $descripcion, $img){
			$sql = "INSERT INTO blog (titulo, fecha, cancion, posicion, intro, descripcion, img, status) VALUES ('$titulo', '$fecha', '$cancion', '$posicion', '$intro', '$descripcion', '$img', 1) "; //echo $sql;

			
			$sq = mysqli_query($link, $sql);
			$id = mysqli_insert_id($link);

			if(!empty($img)){
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio='images/blog/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 
		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img']['tmp_name'],$directorio.'/'.$img);
		    
		        
			} 

			if($sq==true){return true;}else{return false;}
		}


		// update
		public function update($link, $titulo, $fecha, $cancion, $posicion, $intro, $descripcion, $img, $id){
			$sql = "UPDATE blog SET titulo = '$titulo', fecha = '$fecha', cancion = '$cancion', posicion = '$posicion', intro = '$intro', descripcion = '$descripcion' ";
			
			if(!empty($img)){
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio='images/blog/'.$id;
		        if (!is_dir($directorio)){
		            mkdir($directorio, 0777);
		            chmod($directorio, 0777);
		        } 

		        // CARGA IMAGEN
			    move_uploaded_file($_FILES['img']['tmp_name'],$directorio.'/'.$img);
		    
		        $sql .= ", img = '$img' " ;

			}

			$sql .= "WHERE id = '$id'"; // echo $sql;
			
			
    		if(mysqli_query($link, $sql)){return true;}else{return false;}
		}


		// delete
		public function delete($link, $id){
			$sql = "UPDATE blog SET status = 0 WHERE id = '$id'";

			if(mysqli_query($link, $sql)){return true;}else{return false;}
		}



	}
?>