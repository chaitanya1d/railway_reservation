<?php
  #echo $query ."</br>";
  $query1 = "SELECT * FROM route WHERE train_Id=" .$trainId;
  #echo $query1 ."</br>";
  $query2 = "SELECT * FROM timee WHERE trainId=" .$trainId;
  #echo $query2 ."</br>";
  $result = mysqli_query($connection,$query);
  $result1 = mysqli_query($connection,$query1);
  $result2 = mysqli_query($connection,$query2);
  if(!$result){
    die("Databse query failed");
  }
  if(!$result1){
    die("Databse query1 failed");
  }
  if(!$result2){
    die("Databse query2 failed");
  }
?>
</br></br>
<?php
  while($row1 = mysqli_fetch_assoc($result1)){
    //output data from ecach row;
    //var_dump($row);
    echo "station  : ";
    for($i=1;$i<=4;$i++){
      $query3 = getquery($i,$row1);
      #echo $query3 ."</br>";
      $result3 = mysqli_query($connection,$query3);
      if(!$result3){
        die("Databse query3 failed");
      }
      while ($row3 = mysqli_fetch_assoc($result3)) {
        echo $row3["sName"] ."&nbsp &nbsp";
      }
    }
    echo "</br>" . "time     : ";
    while ($row2 = mysqli_fetch_assoc($result2)) {
      echo $row2["st1"] ."&nbsp &nbsp";
      echo $row2["st2"] ."&nbsp &nbsp";
      echo $row2["st3"] ."&nbsp &nbsp";
      echo $row2["st4"] ."&nbsp &nbsp";
    }
    echo "</br>" . "seats for ".$class. " class : ";
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row["st1"] ."&nbsp &nbsp";
      echo $row["st2"] ."&nbsp &nbsp";
      echo $row["st3"] ."&nbsp &nbsp";
      echo $row["st4"] ."&nbsp &nbsp";
    }
}
?>
