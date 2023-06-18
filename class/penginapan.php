<?php 

include "koneksi.php";

	
class penginapan extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampilan(){
		$sql = "SELECT * FROM tbl_hotel";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	
	function nganuu($id_hotel){
			$sql = "SELECT * from tbl_hotel where id_hotel='$id_hotel'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}


}


	
	
	

 

?>