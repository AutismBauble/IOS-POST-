<?php

$name = $_POST['name'];


if( isset($name)){
    echo 'hello '.$name;
}else
{
    echo "No Args";
}

?>
