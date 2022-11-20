<?php
$name = $_POST['name'];
$age = $_POST['age'];

if(file_exists('json/std.json')){

    
    $current_data = file_get_contents('json/std.json');
    $current_arr = json_decode($current_data, true);
    $new_arr = array(
        "name"=>"{$name}",
        "age"=>"{$age}"
    );

    $current_arr[] = $new_arr;
    // array_merge($current_arr, $new_arr);
    
    $new_json = json_encode($current_arr, JSON_PRETTY_PRINT);
    
    $i = file_put_contents('json/std.json', $new_json);
    
    if($i){
        echo 1;
    }
    else{
        echo 0;
    }
}
else{
    echo 0;
}