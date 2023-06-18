<?php 

include "koneksi.php";

	
class restoran extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampilan(){
		$sql = "SELECT * FROM tbl_restoran";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	
	function coli($id_restoran){
			$sql = "SELECT * from tbl_restoran where id_restoran='$id_restoran'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}


}


	
	
	

 

?>