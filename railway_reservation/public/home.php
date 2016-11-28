<?php include("../includes/layout/header.php") ?>
		<div class="Work">
		 <h1 style="color:#42f483">Project By...</h1>
	 <h2><b>B.S. Sujan</b></h2>
	 <h2><b>Chaitanya Dubey</b></h2>
	 <h2><b>Md Sultan Altamash Ali</b></h2>
	 <h2><b>Varun V</b></h2>
	 	</div>
		<?php
			$name = "userid";
			$value = 0;
			$expire = time() + (60*60*24*7);
			setcookie($name,$value,$expire);
		?>
    </div>

</body>
</html>
