<div style="display:none" id="register-container">
	<div id="titre-register">
		<span>Register</span>
		<div id="close-register">X</div>
	</div>
    <form action="index.php" method="POST" id="formulaire_inscription">
		<input id="mail-connect" type="email" name="mail-connect" value="" placeholder="yourmail@domain.com">
		<input id="password-connect" type="password" name="password-connect" placeholder="yourpassword">
		<input id="password-connect-confirmation" type="password" name="password-connect-confirm" placeholder="yourpassword">
		<p class="error" id="erreur_inscription"></p>
		<div id="terms">
			<input type="checkbox" name="cgu" id="cgu" value="no"><span>I read and agree with the <a href="">terms and conditions of utilisation</a></span>
		</div>
		<input type="submit" value="Register" id="register" class="btn-register">	
		<div class="clear"></div>
	</form>	
</div>