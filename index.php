
<?php

//echo $_POST["post_1"];
//$post = $_POST["post_1"];

include 'config.php';

  $linkDB = mysqli_connect("127.0.0.1", $dbuser, "test", "newdb");

  if (!$linkDB) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }


//mysqli_query($link,"INSERT INTO `table`(ID,T_Name,Flag) VALUES(1,'$_POST["post_1"]',1)");
 
//echo $_POST["post_1"];







//データ内容更新
if(mysqli_query($linkDB,"UPDATE `table` SET T_Name='$_POST[post_2]' WHERE ID=")){
  echo "Data updated<br \>";
}else echo "not updated<br \>";




?>
