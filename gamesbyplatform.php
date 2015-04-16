<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("vg_db",$con);
    $query=mysql_query("select Name from Series where Name RLIKE '%{$key}%'");
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
  $sql="Select Name,Nth_game,Rating,Year from Video_games where V_ID in (select V_ID from Released_on where P_ID in(select P_ID from Platform where Name RLIKE '%{$name}%' ))";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  //-create  while loop and loop through result set
  while($row=mysql_fetch_array($result)){
          $Name  =$row['Name'];
          $Nth_game =$row['Nth_game'];
          $Awards =$row['Awards'];
          $Year=$row['Year'];
          $Rating=$row['Rating'];
  //-display the result of the array
  echo "<ul>\n";
  echo "<li>"    .$Name . " " . $Nth_game. " " . $Awards . " " . $Rating . " " . $Year .  "</a></li>\n";
  echo "</ul>";
  }
  
  
  }
  }
?>
