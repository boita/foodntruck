<div style="display:none" id="register-container">
	<div id="titre-register">
		<span>Register</span>
		<div id="close-register">X</div>
	</div>
	<img id="fbconnect" src="http://foodntruck.com/medias/img/fb-connect.png" alt="Facebook Connect" />
	<div id="or-connect">OR</div>
    <form action="index.php" method="POST">
		<input id="mail-connect" type="email" name="user_email" value="<? echo $email; ?>" placeholder="yourmail@domain.com">
		<input id="password-connect" type="password" name="user_password" placeholder="yourpassword">
		<input id="password-connect" type="password" name="user_password_conf" placeholder="yourpassword">
		<p class="error"><? echo $error; ?></p>
		<div id="terms">
			<input type="checkbox" name="terms" value="no"><span>I read and agree with the <a href="">terms and conditions of utilisation</a></span>
		</div>
		<input type="submit" value="Register" id="register" class="btn-register">	
		<div class="clear"></div>
	</form>	
</div>