<?php include("../includes/layout/header.php") ?>
<?php include("../includes/database.php") ?>
		<div class="Work">
      Welcome...
			<?php $uid = $_POST["uid"];
				echo $uid;
			?><br>
			<?php
				$query = "select * from passanger where uId=" .$uid. ";";
				$result = mysqli_query($connection,$query);
				if(!$result){
					die("Databse query failed");
				}
			?>
			<?php
				while($row = mysqli_fetch_assoc($result)){
					//output data from ecach row;
					//var_dump($row);
				#	echo $row["uId"] . "<br/>";
					echo $row["pnr"] . "&nbsp &nbsp";
					echo $row["pName"] . "&nbsp &nbsp";
					echo $row["tId"] . "&nbsp &nbsp";
					echo $row["fare"] . "&nbsp &nbsp";
					echo $row["src"] . "&nbsp &nbsp";
					echo $row["dest"] . "&nbsp &nbsp";
					echo $row["class"] . "&nbsp &nbsp";
					echo "<hr/>";
				}
			?>
    </div>
</body>
</html>
