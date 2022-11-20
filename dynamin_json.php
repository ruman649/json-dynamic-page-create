<?php
echo "Ruman Miah";

$conn  = mysqli_connect("localhost", "root", "", "spi_computer") or die("connection fail");
$s = "select * from student_2020 ";
$q = mysqli_query($conn, $s);

$data = mysqli_fetch_all($q);
$data = json_encode($data, JSON_PRETTY_PRINT);

$file_name="my-".date("d-F-Y")."file.json";
$up = file_put_contents("json/".$file_name, $data);

if($up){
    echo "successfully created json file";
}
else{
    echo "some problem occurs";
}