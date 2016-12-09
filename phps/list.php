<?php
include "../xampp/config.php";
$link = mysqli_connect("127.0.0.1", $dbuser, "test", "newdb");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/*
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
print "<br />";
*/

/***********************************************
データ内容更新
if(mysqli_query($link,"UPDATE `table` SET Flag = 0 WHERE T_Name = 'hage'")){
  echo "Data updated<br \>";
}else echo "not updated<br \>";
*****************************************************/



//テーブル内容表示
$sql = mysqli_query($link,"SELECT T_Name,Flag FROM `table`");
if($result=$sql){
  while ($row=$result->fetch_assoc()) {
    # code...
    echo $row["T_Name"]."     ".$row["Flag"];
    print "<br />";
  }
  $result->close();
}

mysqli_close($link);





?>
