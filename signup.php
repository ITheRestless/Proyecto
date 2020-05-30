<?php session_start()?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>GTech</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

        <header id="header" class="bar">
            <div class="logo"><a href="index.php"> G <span> - Tech</span></a></div>
            <div class="icons"><a href="shop.php"><img class="iconMau" src="images/shop.png"></a></div>
            <div class="icons"><a href="cart.php"><img class="iconMau" src="images/shopCart.png"></a></div>
            <div class="icons"><a href="payment.php"><img class="iconMau" src="images/creditCard.png"></a></div>
            <div class="icons"><a href="login.php"><img class="roundIcon" src="
            <?php echo($_SESSION['userProfilePicture']);?>"></a></div>
            <?php 
                if($_SESSION['idUser'] == 15) {
                    echo('<div class="icons"><a href="addItem.php"><img class="iconMau" src="images/edit.png"></a></div>');
                }
            ?>
        </header>
            
            <section class="wrapper style2">
                <br>
                <h2 class="align-center">Sign Up</h2>
                <br><br>
                <div class="itembox">
                    <form method="post" action="assets/scripts/signUp.php">
                        <div class="row uniform">
                            <div class="itembox">
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userName" value="" placeholder="Name" />
                                <br><br>
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="lastName" value="" placeholder="Last Name" />
                                <br><br>
                                <input type="text" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userProfilePicture" value="" placeholder="Profile Picture Link" />
                                <br><br>
                                <input type="email" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userEmail" value="" placeholder="Email" />
                                <br><br>
                                <input type="password" style="width: 50%; margin-inline-start: 25%; text-align: center;" name="userPassword" value="" placeholder="Password" />
                            </div>
                            <div class="12u$ align-center">
                                <br>
                                <ul class="actions">
                                    <li><input type="submit" value="SignUp"/></li>
                                    <li><a class="button alt" href="login.php">LogIn</a>
                                </ul>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://github.com/ITheRestless" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://www.facebook.com/mauryneitor" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/mauricioavitia/?hl=es-la" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://www.linkedin.com/in/mauricio-emmanuel-avitia-maturino-27997b159/" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
					</ul>
				</div>
			</footer>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>