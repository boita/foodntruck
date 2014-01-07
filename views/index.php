<?php
// index.php : view
?>

<div id="bloc_map">
	<div style="display:none" id="register-container">
		<div id="titre-register">
			<span>Register</span>
			<div id="close-register">X</div>
		</div>
		<img id="fbconnect" src="medias/img/fb-connect.png" alt="Facebook Connect" />
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
	<div id="loading">
		<img src="medias/img/loading.gif" alt="Foodtruck incoming...."/>
		<p>Foodtruck incoming....</p>
	</div>
	<div id="map"></div>
</div>
<div id="container_bottom">
	<div id="bottom">
		<div id="suggestions">
			<h2>- SUGGESTIONS :</h2>
			<div id="bloc_suggest">
				<div class="suggest suggestleft">
					<img class="img_truck" src="medias/img/img_truck/sugg1.png">
					<div class="descr">
						<h3 class="nom_camion">Refectoire</h3>
						<p class="dates">From monday to tuesday</p>
						<div class="prix_base">
							<span class="prix">10€</span><span class="menu">- Menu & accompanying</span><a href="foodtruck.html">See more</a>
						</div>
					</div>
				</div>
				<div class="suggest">
					<img class="img_truck" src="medias/img/img_truck/sugg2.png">
					<div class="descr">
						<h3 class="nom_camion">Cantine california</h3>
						<p class="dates">From tuesday to friday</p>
						<div class="prix_base">
							<span class="prix">10€</span><span class="menu">- Menu & accompanying</span><a href="foodtruck.html">See more</a>
						</div>
					</div>
				</div>
				<div class="suggest suggestleft">
					<img class="img_truck" src="medias/img/img_truck/sugg3.png">
					<div class="descr">
						<h3 class="nom_camion">Caravane dorée</h3>
						<p class="dates">From wednesday to friday</p>
						<div class="prix_base">
							<span class="prix">10€</span><span class="menu">- Menu & accompanying</span><a href="foodtruck.html">See more</a>
						</div>
					</div>
				</div>
				<div class="suggest">
					<img class="img_truck" src="medias/img/img_truck/sugg4.png">
					<div class="descr">
						<h3 class="nom_camion">Le camion qui fume</h3>
						<p class="dates">Only the week-end</p>
						<div class="prix_base">
							<span class="prix">10€</span><span class="menu">- Menu & accompanying</span><a href="foodtruck.html">See more</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="news">
			<h2>- NEW TRUCKS :</h2>
			<div class="news">
				<div class="imgs_news">
					<img class="img_truck" src="medias/img/img_truck/new1.png">
					<img class="losange" src="medias/img/home_ico/losange.png" id="news1">
				</div>
				<p class="descr">
					Cantine california allows you to choose between handmade tacos and burgers noon and French toast or Breakfast Burito. Really tasty, you can find this truck not far from Marché Raspail
				</p>
			</div>
			<div class="news">
				<div class="imgs_news">
					<img class="img_truck" src="medias/img/img_truck/new2.png">
					<img class="losange" src="medias/img/home_ico/losange.png" id="news2">
				</div>
				<p class="descr">
					A nice new foodtruck located near the Triumphal Arch that allows you to eat some french handmade burgers with fries or  salad.
				</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<img src="medias/img/home_ico/gobot.png" id="gobot">