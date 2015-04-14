<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  {
  $name=$_POST['typeahead1'];
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  $mydb=mysql_select_db("vg_db");
    $sql="select video_games.Name, Year,Rating from Video_games where v_id in (select Belongs_to.v_id from Belongs_to where G_ID in (select G_ID from Genre where Name LIKE '%{$name}%')) ";
    $result=mysql_query($sql);
  while($row=mysql_fetch_array($result)){
          $Name  =$row['Name'];
          $Year=$row['Year'];
          $Rating=$row['Rating'];
  echo "<ul>\n";
  echo "<li>"    .$Name . " " . $Year . " ".$Rating.  "</a></li>\n";
  echo "</ul>";
  }
  }
  
  }
  }
?>
