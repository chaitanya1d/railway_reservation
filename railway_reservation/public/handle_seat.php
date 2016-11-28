<?php include("../includes/layout/header.php") ?>
<?php #include("../includes/database.php") ?>
<?php include("../includes/layout/functions.php") ?>
<?php $cost = 100;?>
		<div class="Work">
			<?php
        $ttrainId = 0;
        $src = $_POST["source"];
        $dest = $_POST["dest"];
        $class = $_POST["class"];
			?>
      <?php include("../includes/layout/find_train.php");
      $x = $class;
      $class = getClass($class);
      $query = findClass($x,$class,$trainId);
      include("../includes/layout/getseats.php");
      echo "</br>";
      if($trainId == 100 ||$trainId == 110||$trainId == 120||
      $trainId == 130||$trainId == 140){
        echo "train runs on monday wednesday and friday";
      }
      else{
        echo "train runs on tuesday thrusday and saturday";
      }
     ?>
    </div>
</body>
</html>
