<?php
 
mysql_connect("id8404115_tugas3", "12345", "");
mysql_select_db("id8404115_food");
 
$query = "SELECT * from sambal ";
$result = mysql_query($query) or die(mysql_error());
 
$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
    "No" => $row["No"],
    "Nama" => $row["Nama"], 
    "Harga" => $row["Harga"]); 

    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA sambal<br>\":" . $data . "}";
?>