<?php include("../includes/layout/header.php") ?>

			<div class="Work">
				<div class="form">
					<form method="post" action="handle_book.php">
						passanger name :<input type="text" name="name"/>
						</br></br>
						train id :<input type="text" name="trainId"/>
					 	</br></br>
						<?php include("../includes/layout/shortbook.php") ?>
						</br></br>
						DOJ: <input type="date" name="doj"/>
					</br></br>
						<input type="Submit" name="book" value="book"/>
					</form>
				</div>
		  </div> /*work div*/
    </div> /*main div*/
</body>
</html>
