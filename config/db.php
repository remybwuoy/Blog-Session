<?php
    // create connection
    $conn =mysqli_connect('localhost', 'root', '', 'wesley');

    //check connection
if(mysqli_connect_errno()){
       echo'Failed Connection, Check the damn thing man '. mysqli_connect_errno();
}


?>