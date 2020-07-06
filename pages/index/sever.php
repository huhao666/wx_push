<?php
/**
 * Created by PhpStorm.
 * User: IMOW
 * Date: 2018/4/25
 * Time: 10:48
 */
    $name = $_POST["name"]||$_GET["name"];
    $age = $_POST["age"]||$_GET["age"];
    $map = array();
    $map["name"] = $name;
    $map["age"] = $age;
    echo json_encode($map);
    // echo "this is return str";

