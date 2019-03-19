<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
    $arr = array();
	while ($d = mysqli_fetch_array($data)) {
	    $temp = array(
	    "id" => $d["id"],
	    "nim" => $d["nim"], 
	    "nama" => $d["nama"]);
	   
	    array_push($arr, $temp);
	}
	 
	$data = json_encode(array("DATA MAHASISWA" => $arr));
	 
	echo $data;
?>