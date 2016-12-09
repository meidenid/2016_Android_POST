<title>在室確認</title>
<?php 
$namae = array('石川先生','太田先生','高津先生',"鳥山先生",'中原先生','中山先生','福島先生','船橋先生');

$flag = array(
   "〇"=>"maru",
   "✖"=>"batu"
  );

 ?>

<br>
<center><font size="15"> 先生の在室状態確認</font></center>

<br>
<center>
<table>
  <tbody>

    <tr>
      <th>先生名</th>
      <th>在室状態</th>
    </tr>
    <tr>
      <td><?php echo $namae[0];?></td>
      <td><?php echo array_rand($flag); ?></td>
    </tr>
    <tr>
      <td><?php echo $namae[1]?></td>
      <td><?php echo array_rand($flag); ?></td> 
    </tr>
    <tr>
      <td><?php echo $namae[2]?></td>
      <td><?php echo array_rand($flag); ?></td>
    </tr>
    <tr>
      <td><?php echo $namae[3];?></td>
      <td><?php echo array_rand($flag);?></td>
    </tr>
    <tr>
      <td><?php echo $namae[4];?></td>
      <td><?php echo array_rand($flag); ?></td>
    </tr>
    <tr>
      <td><?php echo $namae[5];?></td>
      <td><?php echo array_rand($flag );?></td>
    </tr>
    <tr>
      <td><?php echo $namae[6];?></td>
      <td><?php echo array_rand($flag);?></td>
    </tr>
    <tr>
      <td><?php echo $namae[7];?></td>
      <td><?php echo array_rand($flag);?></td>
    </tr>

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
