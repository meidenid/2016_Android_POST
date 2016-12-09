
<?php
include 'xampp/config.php';
  $linkDB = mysqli_connect("127.0.0.1", $dbuser,$dbpass,$dbname);
  if (!$linkDB) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }
//データ内容更新
if(mysqli_query($linkDB,"UPDATE `table` SET Flag='$_POST[post_2]' WHERE T_Name='$_POST[post_1]'")){
  echo "Data updated<br \>";
}else echo "not updated<br \>";
?>
