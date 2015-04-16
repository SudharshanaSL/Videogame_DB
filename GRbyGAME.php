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
  $sql="select V.Name,P.Name,S.Name,G.Gross_revenue,G.Unit_sales from Video_games V,Platform P,Studio S, Grossed G where V.V_ID in (select V_ID from Video_games where name rlike '%{$name}%') AND G.V_ID=V.V_ID AND S.St_ID=G.St_ID AND P.P_ID=G.P_ID order by Gross_revenue desc";
  //-run  the query against the mysql query function
  $result=mysql_query($sql);
  //-create  while loop and loop through result set
  echo "<table><thead><tr><th>Video Game</th><th>Platform</th><th>Studio</th><th>Gross Revenue</th><th>Unit Sales</th></tr></thead>";
  echo "<tbody>\n";
  while($row=mysql_fetch_array($result)){
          $VName  =$row['V.Name'];
          $PName = $row['P.Name'];
          $StName = $row['S.Name'];
          $GR = $row['G.Gross_revenue'];
          $Unit_sales = $row['G.Unit_sales'];
  //-display the result of the array
  //echo "<ul>\n";
  //echo "<li>"    .$VName . " " . $PName. " " . $StName . " " . $GR . " " . $Unit_sales .  "</a></li>\n";
  //echo "</ul>";
          echo "<tr><td>".$VName."</td>"."<td>.".$PName."</td>"."<td>".$StName."</td>"."<td>".$GR."</td>"."<td>".$Unit_sales."</td></tr>\n";
  }
          echo "</tbody></table>";
  
  }
  }
?>
