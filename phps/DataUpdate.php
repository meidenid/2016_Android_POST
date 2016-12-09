<?php

$link = mysqli_connect("127.0.0.1", "TestUser", "test", "newdb");
echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
print "<br />";
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


//データ内容更新
if(mysqli_query($link,"UPDATE `table` SET Flag = 1 WHERE T_Name = 'hoge1'")){
  echo "Data updated<br \>";
}else echo "not updated<br \>";



/*
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
*/
mysqli_close($link);


?>
