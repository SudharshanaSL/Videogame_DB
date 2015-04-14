<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("vg_db",$con);
    $query=mysql_query("select Studio.Name from Studio where Name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['Name'];
    }
    echo json_encode($array);



    if(isset($_POST['submit'])){
  {
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  $mydb=mysql_select_db("vg_db");
  $sql="Select Name,Year,Rating from Video_games where V_ID in (select V_ID from Part_of where S_ID in(select S_ID from Created_by where St_ID in(select St_ID from Studio where Name like '%{$key}%'))) ";
  $result=mysql_query($sql);
  while($row=mysql_fetch_array($result)){
          $Name  =$row['Name'];
          $Year =$row['Year'];
          $Rating =$row['Rating'];
  echo "<ul>\n";
  echo "<li>"    .$Name . " " . $Year .  "</a></li>\n";
  echo "</ul>";
  }
  
  
  }
  }
?>