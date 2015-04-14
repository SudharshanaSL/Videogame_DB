<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("vg_db",$con);
    $query=mysql_query("select Name from Video_games where Name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['Name'];
    }
    echo json_encode($array);



    if(isset($_POST['submit'])){
  {
  //connect  to the database
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("vg_db");
  //-query  the database table
  $sql="select Name,Year,Rating from Video_games where Name LIKE '%{$key}%'";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $Name  =$row['Name'];
          $Year=$row['Year'];
          $Rating=$row['Rating'];
  //-display the result of the array
  echo "<ul>\n";
  echo "<li>"    .$Name . " " . $Year .  "</a></li>\n";
  echo "</ul>";
  }
  
  
  }
  }
?>
