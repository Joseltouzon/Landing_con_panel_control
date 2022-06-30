<?php
	class NEWSLETTER{
		
		// read
		public function read($link){
			
			$sql = "SELECT * FROM newsletter";
			$sq = mysqli_query($link, $sql);
			return $sq;
		}

		// create new
		public function create($link, $email, $nombre){
			$sql = "INSERT INTO newsletter (email, nombre) VALUES ('$email','$nombre')";
			$sq = mysqli_query($link, $sql);
			if($sq==true){return true;}else{return false;}
		}

		// delete
		public function delete($link, $id){
			$sql = "DELETE FROM newsletter WHERE id = '$id'";

			if(mysqli_query($link, $sql)){return true;}else{return false;}
		}

	}
?>