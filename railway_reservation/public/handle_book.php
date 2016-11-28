<?php include("../includes/layout/header.php") ?>
<?php include("../includes/layout/functions.php") ?>
		<div class="Work">
			<?php
        $uid = $_COOKIE["userid"];
        if($uid == 0){
          echo "<h3>Please login to continue</h1>";?>
       <?php  }
        else{
          $name = $_POST["name"];
          $date = $_POST["doj"];
          $pnr = rand(400,1000);
          $tid = $_POST["trainId"];
          $st1 = $_POST["st1"];
          $st2 = $_POST["st2"];
          $st3 = $_POST["st3"];
          $st4 = $_POST["st4"];
          $date = $_POST["doj"];
          $class = $_POST["class"];
          if(($st1 != 0))
            {$src = stationname($st1);}
          else if(($st2 != 0))
            {$src = stationname($st2);}
          else if(($st3 != 0))
            {$src = stationname($st3);}
          if(($st4 != 0))
            {$dest = stationname($st4);}
          else if(($st3 != 0))
            {$dest = stationname($st3);}
          else if(($st2 != 0))
            {$dest = stationname($st2);}

          if($class == 1){$fare = 1000;}
          else if($class == 2){ $fare = 800;}
          else if($class == 3){ $fare = 500;}
          else if($class == 4){ $fare = 300;}
          $query = "INSERT INTO passanger ";
          $query .= "values(" .$uid. "," .$pnr. ",'" .$name. "','" .$date. "'," .$tid. "," .$fare. ",'" .$src. "','" .$dest. "'," .$class. ");";
          $result = mysqli_query($connection,$query);
          if(!$result){
            die("Databse query failed");
          }


          $cs = getClass($class);
          #$query = "UPDATE " .$cs. " SET st1 = st1-1,st2=st2-1 where threeId=" .$tid. ";";
          #echo $query;
					#1 and 4 are entered
          if( ($st1 != 0)  && ($st2 != 0) && ($st3 != 0) && ($st4 != 0))
            {$query = "UPDATE " .$cs. " SET st1 = st1-1,st2=st2-1,st3=st3-1,st4=st4-1 where " .$cs. "Id=" .$tid. ";";}
						#1 and 3 are entered
					if( ($st1 != 0) && ($st2 != 0) && ($st3 != 0) && ($st4 == 0))
							{$query = "UPDATE " .$cs. " SET st1 = st1-1,st2=st2-1,st3=st3-1 where " .$cs. "Id=" .$tid. ";";}
					#1 and 2 are entered
          if( ($st1 != 0) && ($st2 != 0)&& ($st3 == 0) && ($st4 == 0))
            {$query = "UPDATE " .$cs. " SET st1 = st1-1,st2=st2-1 where " .$cs. "Id=" .$tid. ";";}

          #2 and 3 are entered
          if(($st1 == 0) && ($st4 == 0)&& ($st2 != 0) && ($st3 != 0))
            {$query = "UPDATE " .$cs. " SET st2 = st2-1,st3=st3-1 where " .$cs. "Id=" .$tid. ";";}
          #2 and 4 are entered
          if(($st1 == 0) && ($st2 != 0) && ($st3 != 0) && ($st4 != 0))
            {$query = "UPDATE " .$cs. " SET st2 = st2-1,st3=st3-1,st4=st4-1 where " .$cs. "Id=" .$tid. ";";}
          #3 and 4 are entered
          if(($st1 == 0) && ($st2 == 0) && ($st3 != 0) && ($st4 != 0))
            {$query = "UPDATE " .$cs. " SET st3 = st3-1,st4=st4-1 where " .$cs. "Id=" .$tid. ";";}

					$result = mysqli_query($connection,$query);
          if(!$result){
            die("Databse query1 failed");
          }
					echo "<h1>Booked</h1>" . "</br>";
		      echo "your PNR = " .$pnr;
      }

    ?>

    </div>
</body>
</html>
