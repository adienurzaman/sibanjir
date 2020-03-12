
<?php   

header("Content-type:application/json");
	include "conf/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ketinggian = $_POST['ketinggian'];
    $keterangan = $_POST['keterangan'];
    $waktu = date ("Y-m-d H:i:s");
    $query = " INSERT INTO tabelbanjir (ketinggian, keterangan, waktu) VALUES ('$ketinggian','$keterangan','$waktu') ";
    //$query = " INSERT INTO tabelbanjir (ketinggian) VALUES ('$ketinggian') ";

    if( mysqli_query($connect,$query) ){

        $response['success'] = true;

        $response['message'] = "Successfully";

    }else{

        $response['success'] = false;

        $response['message'] = "Failure";

    }

}else{

    $response['success'] = false;

    $response['message'] = "Error !";

}


echo json_encode($response);





?>
