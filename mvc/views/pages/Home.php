<?php
while($row = mysqli_fetch_array( $data["ds"] )){
    echo $row["hoten"];
}
?>

<hr />

<?php
$mang = json_decode($data["ds2"]);
foreach($mang as $sv){
    echo $sv->hoten;
}
?>
