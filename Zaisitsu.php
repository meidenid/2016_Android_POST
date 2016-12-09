<title>在室確認</title>
<?php 
include'config.php';
//データベース接続
$link = mysqli_connect("127.0.0.1", $dbuser,$dbpass,$dbname);

//データベース接続確認
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "SELECT T_Name,Flag FROM `stable`";

$result = $link -> query($sql);

//クエリー失敗
if(!$result) {
	echo $link->error;
	exit();
}

//連想配列で取得
while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$rows[] = $row;
}

//結果セットを解放
$result->free();
 
// データベース切断
$link->close();
 
?>


<br>
<center><font size="15"> 先生の在室状態確認</font></center>
<meta charset="utf-8">
<br>
<center>
<table>
  <tbody>
   <tr>
      <th>先生名</th>
      <th>在室状態</th>
    </tr>


<?php //配列反復処理
foreach($rows as $row){
?> 
 
    <tr>
      <td><?php //名前表示
      echo $row['T_Name']; ?></td>
      <td><?php //Flagによって○×出力
      if($row['Flag']==1){
        echo "〇";
        }else{
          echo "×";
        } ?></td>
    </tr>

    <?php //反復処理締め
} 
?>
 

  </tbody>
</table>
</center>





<style>
table {
  width: auto;
  border-spacing: 0;
  font-size:50px;
}

table th {
  color: #000;
  padding: 8px 15px;
  background: #eee;
  background:-moz-linear-gradient(#eee, #ddd 50%);
  background:-webkit-gradient(linear, 100% 0%, 100% 50%, from(#eee), to(#ddd));
  font-weight: bold;
  border-top:1px solid #aaa;
  border-bottom:1px solid #aaa;
  line-height: 120%;
  text-align: center;
  text-shadow:0 -1px 0 rgba(255,255,255,0.9);
  box-shadow: 0px 1px 1px rgba(255,255,255,0.3) inset;
}

table th:first-child {
  border-left:1px solid #aaa;
  border-radius: 5px 0 0 0;
}

table th:last-child {
  border-radius:0 5px 0 0;
  border-right:1px solid #aaa;
  box-shadow: 2px 2px 1px rgba(0,0,0,0.1);
}

table tr td {
  padding: 8px 15px;
  text-align: center;
}

table tr td:first-child {
  border-left: 1px solid #aaa;
}

table tr td:last-child {
  border-right: 1px solid #aaa;
  box-shadow: 2px 2px 1px rgba(0,0,0,0.1);
}

table tr {
  background: #fff;
}

table tr:nth-child(2n+1) {
  background: #f5f5f5;
}

table tr:last-child td {
  border-bottom:1px solid #aaa;
  box-shadow: 2px 2px 1px rgba(0,0,0,0.1);
}

table tr:last-child td:first-child {
  border-radius: 0 0 0 5px;
}

table tr:last-child td:last-child {
  border-radius: 0 0 5px 0;
}

table tr:hover {
  background: #eee;
  cursor:pointer;
}
</style>
