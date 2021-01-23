
<!-- php codes -->

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

$us = $_POST['username'];

$user = filter_var($us,FILTER_SANITIZE_STRING);

$ma = $_POST['email'];

$mail = filter_var($ma,FILTER_SANITIZE_EMAIL);

$ce = $_POST['cellphone'];

$cell = filter_var($ce, FILTER_SANITIZE_NUMBER_INT);

$ms = $_POST['message'];

$msg = filter_var($ms,FILTER_SANITIZE_STRING);

//mail('by9152068@gmail.com', $user, $msg, $mail);

$error = array();

if(strlen($user) <= 3 ){

$error[] = "the name must be larger than <strong> three </strong> ". "<br>";

}

if(strlen($msg) <= 10){

$error[] = "the message must be larger than <strong> ten </strong> ". "<br>";

}

if(strlen($cell) > 11 || strlen($cell) < 11){

$error[] = "the number of phone must be <strong> 11 </strong>  number". "<br>";

}

}

?>

<!-- html codes -->

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="hello world">

	<title>hellp php</title>
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body>

	<div>

		<h2 class="text-center">contact me</h2>

				<?php   if(!empty($error)){ ?>

				  <div class="alert alert-danger alert-dismissible text-center test" role="start">
                      <button type="button" class="close" data-dismiss="alert" arial-label="close">
                      <span aria-hidden="true"> &times; </span> </button>

				   	<?php    foreach($error as $x){   echo $x. "<br>";

					}
					
					?>
				</div>

					<?php
				}

				else{

					if(isset($user) && isset($mail) && isset($cell) && isset($msg)){

					echo "<div class='text-center alert alert-danger alert-dismissible test v1'>";
						echo "the message successed";
					echo "</div>";

				}}

				?>

		<form class="s" autocomplete="off" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				
			<!--first input -->
			<input type="text" class="username" name="username" placeholder="Type Your Username" 
			value="<?php if(isset($user)) echo $user ?>" >
			<i class="fas fa-user"></i>
			<i class="far fa-times-circle y1"></i>
			<!--first alert -->
			<div class="alert alert-danger text-center test z1">
               the name must be larger than three
			</div>

			<!--second input -->
			<input class="mail" type="email" name="email" placeholder="Please Type a Vaild Email" 
			value="<?php if(isset($mail)) echo $mail ?>" >
            <i class="fas fa-envelope"></i>
            <i class="far fa-times-circle y2"></i>
			<!--second alert -->
			<div class="alert alert-danger text-center test z2">
			the email can not be empty
			</div>

            <!--third input -->
			<input class="phone" type="text" name="cellphone" placeholder="Type Your Cell Phone" 
			value="<?php if(isset($cell)) echo $cell ?>" >
			<i class="fas fa-phone-alt"></i>
			<i class="far fa-times-circle y3"></i>
			<!--third alert -->
			<div class="alert alert-danger text-center test z3">
             the number of phone must be 11 number
			</div>

			<!--fourth input -->
			<textarea name="message"class="mess" placeholder="Your Message!" ><?php if(isset($msg)) echo $msg ?></textarea>
			<i class="far fa-times-circle y4" style="margin-top: -60px"></i>
			<!--fourth alert -->
			<div class="alert alert-danger text-center test z4">
             the message must be larger than ten
			</div>

			<!--fifth input -->
			<input type="submit" value="send message">
			<i class="far fa-paper-plane"></i>

				<button class="b">send another message</button>	

		</form>

	</div>

	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="js/all.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/fontawesome.min.js"></script>
	<script type="text/javascript" src="js/test.js"></script>

</body>
</html>