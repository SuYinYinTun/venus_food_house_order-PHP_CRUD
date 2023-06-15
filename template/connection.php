<?php

    $connection = mysqli_connect('localhost','root','','crud');

    if($connection == true) {
        mysqli_connect('localhost','root','','crud');
    }else {
        echo "Connection error" . mysqli_connect_error();
    }

?>