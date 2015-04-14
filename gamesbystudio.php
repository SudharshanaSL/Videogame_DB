<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  {
  $name=$_POST['typeahead2'];
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  $mydb=mysql_select_db("vg_db");
    $sql="Select Name,Year,Rating from Video_games where V_ID in (select V_ID from Part_of where S_ID in(select S_ID from Created_by where St_ID in(select St_ID from Studio where Name like '%{$name}%'))) ";
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