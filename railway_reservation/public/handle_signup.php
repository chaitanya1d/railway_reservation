<?php include("../includes/layout/header.php") ?>
<?php include("../includes/layout/functions.php") ?>
		<?php
			$pass = $_POST["pass"];
			if(strlen($pass)<=8){
				echo "</br>" . "<pre>" ."<h3 style=\"color:#ffffff\">        Password is too short, password length should atleast 8 characters";
				echo "</br></br>	Please try again</h3>" ."</pre>";
			}
			else {
		?>
		<div class="Work">
      <?php
        $uid = $_POST["uid"];

        $name = $_POST["name"];
        $query = "INSERT INTO user ";
        $query .= "values(" .$uid. ",'" .$name. "','" .$pass. "');";
        #echo $query;
        $result = mysqli_query($connection,$query);
        if(!$result){
          die("Database query failed");

        }
				else{
				echo "<h1>Congrats you have successfully signed up</h1>";
			}
		}
       ?>
   </div>
</body>
</html>
