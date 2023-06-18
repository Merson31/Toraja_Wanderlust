<?php 

include "koneksi.php";

	
class wisata extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampilan(){
		$sql = "SELECT * FROM tbl_wisata";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	
	function yakin($id_wisata){
			$sql = "SELECT * from tbl_wisata where id_wisata='$id_wisata'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}


}


	
	
	

 

?>