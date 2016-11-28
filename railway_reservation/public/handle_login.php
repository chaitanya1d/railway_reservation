<?php include("../includes/layout/header.php") ?>
<?php include("../includes/layout/functions.php") ?>
		<div class="Work">
      <?php
        $uid = $_POST["uid"];
        $pass = $_POST["pass"];
        $query = "SELECT uPass from user WHERE uId=" .$uid;
        $result = mysqli_query($connection,$query);
        if(!$result){
          die("Database query failed");
        }
        while($row = mysqli_fetch_assoc($result)){
          $check = $row["uPass"];
          if($check == $pass){
            echo "<h1>You are logged in</h1>";
            $name = "userid";
            $value = $uid;
            $expire = time() + (60*60*24*7);
            setcookie($name,$value,$expire);
          }
          else{
            echo "<h1>Please enter correct username/password</h1>";
          }
        }
       ?>
   </div>
</body>
</html>
