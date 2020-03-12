<?php


include "conf/koneksi.php";

$sql = "SELECT * FROM tabelbanjir order by kodebanjir desc limit 1";

$response = mysqli_query($connect, $sql);

$result = array();
        
$row = mysqli_fetch_assoc($response) ;

 
echo $row['ketinggian'].",";
 
 ?>