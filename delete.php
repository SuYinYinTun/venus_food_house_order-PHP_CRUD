<?php include_once('./template/connection.php')?>


<?php
    $id = htmlentities( $_GET['userId']);
    // echo $id;

    $sql ="DELETE FROM ordering WHERE id=? ";
    //$query = mysqli_query($connection, $sql);
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s', $id);
    $stmt->execute();

    if($stmt){
        header("location: ./read.php");
    }else{
        echo "Delete Fails" ;// . mysqli_error();
    }

?>