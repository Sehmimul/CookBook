<?php 
session_start();
?>

<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">

  <title>Welcome to the MeltingPot</title>

  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,300,400,500" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel="stylesheet" href="./landing/landing.css">



</head>

<body>

<!-- partial:index.partial.html -->

<div class="menu-icon">

    <span class="menu-icon__line menu-icon__line-left"></span>

    <span class="menu-icon__line"></span>

    <span class="menu-icon__line menu-icon__line-right"></span>

</div>



<div class="nav">

    <div class="nav__content">

        <ul class="nav__list">

<!--        ////////////////////////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////// -->

            <li class="nav__list-item"><a href="myindex.php">CookBook</a></li>


            <?php if ($_SESSION == NULL) { ?>

            

            <li class="nav__list-item"><a href="cookbooksign.php">Sign Up / Log In</a></li>






            <?php } ?>

            <?php if ($_SESSION != NULL) { ?>
            <li class="nav__list-item"><a href="add.php">Add</a></li>

            <li class="nav__list-item"><a href="signout.php">Log Out</a></li>
<br>
            
            <ul class="nav__list-item"><?php 
            if ($_SESSION) {

            echo $_SESSION['name']; 
        }?>
        </ul>
        
            <?php } ?>

<!--        ////////////////////////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////////////////// -->
            


        </ul>

            

    </div>

</div>







<div class="site-content">

    <h1 class="site-content__headline">Welcome to the MeltingPot!

        <br>

        Get Started!

    </h1>

</div>

<!-- partial -->

  <script  src="./landing/landing.js"></script>



</body>

</html>