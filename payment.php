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
                <h2 class="align-center">Insert Credit Card</h2>
                <br><br>
                <div class="itembox">
					<form action="assets/scripts/insertCard.php" method="post">
                        <div class="row uniform">
                            <div class="12u$ align-center">
								Number<input type="text" style="height:30px ;width: 50%; margin-inline-start: 25%; text-align: center;" name="cardNumber" placeholder="XXXX-XXXX-XXXX-XXXX"/>
								<br>Exp Date<input type="text" style="height:30px; width: 50%; margin-inline-start: 25%; text-align: center;" name="cardExp" placeholder="XX/XX"/>
								<br>CVV<input type="text" style="height:30px; width: 50%; margin-inline-start: 25%; text-align: center;" name="cardCVV" placeholder="XXX"/>
								<br><input type="Submit"/><br>
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