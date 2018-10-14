<?php
$name = $_GET['name'];
$p1 = $_GET['pwd1'];
$p2 = $_GET['pwd2'];
if($name == ''){
    echo 'nameErr';
}elseif($p1 == ''){
    echo 'p1Err';
}elseif($p2 == ''){
    echo 'p2Err';
}elseif($p1 != $p2){
    echo 'error';
}else{
    echo 'success';
}



