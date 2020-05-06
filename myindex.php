<?php
	session_start();
	include 'connection_check.php';
	//$sql = 'SELECT * FROM hub ORDER BY created_at DESC'; //not needed 
	$sql = 'SELECT * FROM uploads ORDER BY created_at DESC';
	$result = mysqli_query($conn, $sql);
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC); //returns as associated array
	mysqli_free_result($result);
	//mysqli_close($conn);

	$sql_1 = 'SELECT * FROM users';
	$result_1 = mysqli_query($conn, $sql_1);
	$pizzas_1 = mysqli_fetch_all($result_1, MYSQLI_ASSOC); //returns as associated array
	mysqli_free_result($result_1);
	mysqli_close($conn);
	//print_r($pizzas);
?>

<!DOCTYPE html>
<html>
<!--Import Google Icon Font-->
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <style>
     	.card{
     		padding: 1px 1px;
     	}
     	.card-title {
     		border-bottom: 0.2px solid grey;
     		/*border-radius: 40%;*/
     	}

     	.author{
     		color: grey;
     		font-size: 90%;
     		font-family: cursive;
     	}



     	
     </style>


<!-- <?php include 'header.php'; ?> -->

<h4 class="center grey-text">Database</h4>

<?php if ($_SESSION != NULL) { ?> 

<h5 class="center grey-text lighten-2"><?php echo $_SESSION["name"]?></h5>
 <?php } ?> 
<div class="container">
	<div class="row">
	<?php foreach ($pizzas as $pizza) { 
	//	if ($pizza['username'] == "") {
		?>  
		<div class="col s12 m6 l6 x4 ">
			<div class="card hoverable">
			<div class=" indigo lighten-4 card-content ">

		<span class="card-title center">
			<?php echo htmlspecialchars($pizza['title']);?>
		</span>
			<h6><?php echo htmlspecialchars($pizza['ingredients']);?></h6>
			<h6><?php echo htmlspecialchars($pizza['description']);?></h6>
			<h6 class="red-text"><?php echo htmlspecialchars($pizza['precautions']);?></h6>

			<div class="row">
				<div class="col s1 m1 l1">
					<div class="material-icons red-text small">favorite</div>
					
				</div>	

				<div class="col s1 m1 l1 left">
					<div class="teal-text"><?php echo htmlspecialchars($pizza['countlike']);?></div>
					
				</div>			
			</div>

				
		</div>
				<div class="card-action indigo lighten-5">
					<div class="row">
						<div class="col s6 m6 l6">
							<div class="author left-align">
								<?php echo htmlspecialchars($pizza['name']);?>			
							</div>							
						</div>
						<div class="col s6 m6 l6">
							<div class="right-align">
							<a href="details.php?id=<?php echo $pizza['id']?>">
							
								<i class="material-icons grey-text">apps</i>
							</a>
							</div>
							

						</div>
						

					</div>
				
				</div>






			</div>

		</div>
	<?php //} 
		}?>
		
	</div>
	
</div>


<!-- <?php include 'footer.php'; ?> -->


</html>