	<html>
	<meta charset="utf-8">
	<head>
	<link rel="stylesheet" href="-landingStyle.css">
	<title>Login</title>
	<style>
		
	</style>

	</head>
	<body id="bgimg-login">
		
			<div class="contentPanel" >
				<div class="outer-containerPanel">
					<div class="inner-containerPanel" >
						
							<form class=" padding " action="Controller1.php" method="POST" >
								<p> <h1 class = "htitle-login" ><font size=6>Bienvenidos al Login</font></h1></p><br></br>
								<div class="tableDiv" style="width: 100%;">
									
									<div class="tableDivRow" style="width: 100%; ">
										<div class="tableDivCol" style="width: 100%;">
											
										</div>
									</div>	
									<div class="tableDivRow" style="width: 100%; ">
										<div class="tableDivCol" style="width: 100%;">
											<p> <h2 class = "htitle-login" ><font size=6>Inicie sesion</font><h2></p><br></br>
										</div>
									</div>	
										<p> <input type="text" name="user" placeholder="LeWagon" required></p>
										<p> <input type="text" name="passw" placeholder="LeWagon" required></p>
									
									<div class="tableDivRow" style="width: 100%;">
										<div class="tableDivCol" style="width: 100%;">
											<p><input type="submit" name="enviar" value="Next" /></p>
										</div>
									</div>
									
									<div class="tableDivRow">
										<div class="tableDivCol" style="width: 100%;">
											<p><input type="reset" name="reset" value="Reset" /></p>
									</div>

								</div>

							</form>
<?php
$btnLogInAsGuest = "<form action='index.html' method='post'>
<p><input type='submit' name='submit' value='LogAsGuest' /></p>			
</form>	";
echo $btnLogInAsGuest;

?>							
							
					</div>	
				</div>	
			</div>	
		
	</body>
</html>