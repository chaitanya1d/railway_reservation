<?php include("../includes/database.php") ?>
<?php
function getWeekday($date) {
return date('w', strtotime($date));
}
function getClass($x){
  if($x == 1){
    return "one";}
  else if($x == 2){
    return "two";}
  else if($x == 3){
    return "three";}
  else if($x == 4){
    return "sleeper";}
}
function findClass($x,$class,$y){
  if($x == 1){
    $q = "SELECT * FROM " .$class. " WHERE oneId=" .$y. "";
    return $q;}
  else if($x == 2){
    $q = "SELECT * FROM " .$class. " WHERE twoId=" .$y. "";
    return $q;}
  else if($x == 3){
    $q = "SELECT * FROM " .$class. " WHERE threeId=" .$y. "";
    return $q;}
  else if($x == 4){
    $q = "SELECT * FROM " .$class. " WHERE slpId=" .$y. "";
    return $q;}
}
function getquery($x,$row1){
  if($x == 1){
    return "SELECT sName FROM station WHERE sId=" .$row1["st1"];}
  else if($x == 2){
    return "SELECT sName FROM station WHERE sId=" .$row1["st2"];}
  else if($x == 3){
    return "SELECT sName FROM station WHERE sId=" .$row1["st3"];}
  else if($x == 4){
    return "SELECT sName FROM station WHERE sId=" .$row1["st4"];}
}
function stationName($x){
  if($x =="0"){return "null";}
  else if($x =="0"){return "null";}
  else if($x =="1"){return "jammu";}
  else if($x =="2"){return "chandigarh";}
  else if($x =="3"){return "jaipur";}
  else if($x =="4"){return "gandhi nagar";}
  else if($x =="5"){return "delhi";}
  else if($x =="6"){return "lucknow";}
  else if($x =="7"){return "patna";}
  else if($x =="8"){return "ranchi";}
  else if($x =="9"){return "kolkata";}
  else if($x =="10"){return "shilong";}
  else if($x =="11"){return "mumbai";}
  else if($x =="12"){return "hyderabad";}
  else if($x =="13"){return "amravati";}
  else if($x =="14"){return "panji";}
  else if($x =="15"){return "bangalore";}
  else if($x =="16"){return "chennai";}
  else if($x =="17"){return "thiruvananthapuram";}
}
 ?>
