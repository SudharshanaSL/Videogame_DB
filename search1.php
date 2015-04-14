<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("vg_db",$con);
    $query=mysql_query("select Name from Genre where Name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['Name'];
    }
    echo json_encode($array);



    if(isset($_POST['submit'])){
  {
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  $mydb=mysql_select_db("vg_db");
  $sql="select video_games.Name, Year from Video_games where v_id in (select Belongs_to.v_id from Belongs_to where G_ID in (select G_ID from Genre where Name LIKE '%{$key}%')) ";
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
