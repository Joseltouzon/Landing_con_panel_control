<?php 
	class COMENTARIO{ 
		
		
        // create 
		public function create($link, $nombre, $fecha, $idBlog, $descripcion){
			$sql = "INSERT INTO comentario (nombre, fecha, idBlog, descripcion) VALUES ('$nombre', now(), '$idBlog', '$descripcion')";
			$sq = mysqli_query($link, $sql);
			if($sq==true){return true;}else{return false;}
		}

		// read

		public function read($link){
			$sql = "SELECT *, comentario.id as id, comentario.nombre as nombre, comentario.fecha as fecha, comentario.descripcion as comentario, blog.titulo as titulo FROM comentario INNER JOIN blog ON blog.id = comentario.idBlog"; // sql 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

		// read 2

		public function read2($link, $idBlog){
			$sql = "SELECT *, comentario.id as id, comentario.nombre as nombre, comentario.fecha as fecha, comentario.descripcion as comentario FROM comentario WHERE comentario.idBlog = $idBlog";  // echo $sql; 

			$sq = mysqli_query($link, $sql);
			
			return $sq;
		}

		//find
		public function find($link, $idBlog){
			$sql = "SELECT * FROM comentario WHERE idBlog = '$idBlog'";
			$sq = mysqli_query($link, $sql);
			$s  = mysqli_fetch_array($sq);

			return $s;
		}
        

		// delete
		public function delete($link, $id){
			$sql = "DELETE FROM comentario WHERE id = '$id'";

			if(mysqli_query($link, $sql)){return true;}else{return false;}
		}


	}
?>