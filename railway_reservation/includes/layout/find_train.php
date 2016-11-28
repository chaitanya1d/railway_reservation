<?php
  $query = "SELECT train_Id FROM route WHERE ";
  $query .= "(st1=" .$src. " AND st2=" .$dest. ") OR ";
  $query .= "(st1=" .$src. " AND st3=" .$dest. ") OR ";
  $query .= "(st1=" .$src. " AND st4=" .$dest. ") OR ";
  $query .= "(st2=" .$src. " AND st3=" .$dest. ") OR ";
  $query .= "(st2=" .$src. " AND st4=" .$dest. ") OR ";
  $query .= "(st3=" .$src. " AND st4=" .$dest. ");";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("Databse query failed");
  }
?>
</br></br>
<?php
if($result == NULL){
  echo "no train available";
}
else{
  while($row = mysqli_fetch_assoc($result)){
    //output data from ecach row;
    //var_dump($row);
    $trainId = $row["train_Id"];
    echo "train Id: " .$trainId. "&nbsp &nbsp";
  }
}
?>
