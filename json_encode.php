<?php
// $conn = mysqli_connect('localhost', 'root', '', 'test') or die('connection fail ');

// $select = "select * from sql_ajax";
// $q = mysqli_query($conn, $select) or die("select from db is fail");
// $data = mysqli_fetch_all($q, MYSQLI_ASSOC);

// // echo $data = $data = json_encode($data);
// $data = json_encode($data);
// echo $data;
// // echo "<pre>";
// // print_r($data);
// echo "<br>";

// echo "<pre>";
// print_r(json_decode($data, true));


$file = file_get_contents('./my.json');
// echo $file;

echo "<pre>";
print_r(json_decode($file, MYSQLI_ASSOC));