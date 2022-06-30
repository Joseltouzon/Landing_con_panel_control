<?php 
	class POST{ 
		
		
		// read

		public function read($link){
			$sql = "SELECT * FROM post WHERE status = 1 ORDER BY posicion ASC"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

		public function read5($link){
			$sql = "SELECT * FROM post WHERE status = 1 ORDER BY posicion ASC"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}
        
        public function read3($link){
			$sql = "SELECT * FROM post WHERE status = 1 ORDER BY posicion ASC LIMIT 11"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

		public function read2($link){
			$sql = "SELECT * FROM post WHERE status = 1 ORDER BY posicion ASC LIMIT 4"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

		public function read4($link){
			$sql = "SELECT * FROM post WHERE status = 1 ORDER BY posicion DESC"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

        //find
		public function find($link, $id){
			$sql = "SELECT * FROM post WHERE id = '$id'";
			$sq = mysqli_query($link, $sql);
			$s  = mysqli_fetch_array($sq);

			return $s;
		}

		// create new
		public function create($link,$titulo, $video, $cancion, $posicion, $descripcion, $img){
			$sql = "INSERT INTO post (titulo, video, cancion, posicion, descripcion, img, status) VALUES ('$titulo', '$video', '$cancion', '$posicion', '$descripcion', '$img', 1) "; //echo $sql;

			
			$sq = mysqli_query($link, $sql);
			$id = mysqli_insert_id($link);

			if(!empty($img)){
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio='images/post/'.$id;
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
		public function update($link, $titulo, $video, $cancion, $posicion, $descripcion, $img, $id){
			$sql = "UPDATE post SET titulo = '$titulo', video = '$video', cancion = '$cancion', posicion = '$posicion', descripcion = '$descripcion' ";
			
			if(!empty($img)){
				// EN CASO DE NO EXISTIR CREA DIRECTORIO
				$directorio='images/post/'.$id;
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
			$sql = "UPDATE post SET status = 0 WHERE id = '$id'";

			if(mysqli_query($link, $sql)){return true;}else{return false;}
		}



	}
?>