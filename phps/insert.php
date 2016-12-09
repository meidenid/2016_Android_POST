<?php
    $link = mysqli_connect("127.0.0.1", "TestUser", "test", "newdb");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    //データ追加
    if(mysqli_query($link,"INSERT INTO `table`(ID,T_Name,Flag) VALUES(1,'Get_test',1)")){
    echo "add data<br \>";
    }else echo "not add data<br \>";


    mysqli_close($link);


?>