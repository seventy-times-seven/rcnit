<?php
$link = mysqli_connect ('localhost', 'root', '', 'rcnit IRV');
$sql = "Select * from users";
//$sql = "INSERT into users (name, password) values ('Adam', '3456')";
$ret = mysqli_query($link, $sql);
while (($res = mysqli_fetch_assoc($ret)) != false){
    var_dump($res);
}
//var_dump($res);