<div id="header">
	<div id="content_header">
		<div id="search">
			<form id="keyword" action="search.php" method="POST">
				<div id="show_menu">
					<span class="lines"></span>
					<span class="lines"></span>
					<span class="lines"></span>
				</div>
				<div id="search_field">
					<input type="text" name="inp_search" id="inp_search" class="items" placeholder="Find a Foodtruck...">
					<input type="image" src="medias/img/search/loupe.png" id="loupe">
				</div>
				<div class="clear"></div>
			</form>
			<form id="advanced" action="" method="POST">
				<p>Find your truck by selecting your tastes</p>
				<ul>
					<li>
						<label for="candy">Candy</label>
						<input type="checkbox" name="candy" id="candy">
					</li>
					<li>
						<label for="ice_cream">Ice-cream</label>
						<input type="checkbox" name="ice_cream" id="ice_cream">
					</li>
					<li>
						<label for="donuts">Donuts</label>
						<input type="checkbox" name="donuts" id="donuts">
					</li>
					<li>
						<label for="chocolat">Chocolat</label>
						<input type="checkbox" name="chocolat" id="chocolat">
					</li>
					<li>
						<label for="lolipop">Lolipop</label>
						<input type="checkbox" name="lolipop" id="lolipop">
					</li>
					<li>
						<label for="burger">Burger</label>
						<input type="checkbox" name="burger" id="burger">
					</li>
					<li>
						<label for="hot_dog">Hot-dog</label>
						<input type="checkbox" name="hot_dog" id="hot_dog">
					</li>
					<li>
						<label for="pasta">Pasta</label>
						<input type="checkbox" name="pasta" id="pasta">
					</li>
					<li>
						<label for="bagels">Bagels</label>
						<input type="checkbox" name="bagels" id="bagels">
					</li>
					<li>
						<label for="pizza">Pizza</label>
						<input type="checkbox" name="pizza" id="pizza">
					</li>
					<li>
						<label for="sandwish">Sandwish</label>
						<input type="checkbox" name="sandwish" id="sandwish">
					</li>
					<li>
						<label for="veggie_burger">Veggie-burger</label>
						<input type="checkbox" name="veggie_burger" id="veggie_burger">
					</li>
					<li>
						<label for="fish">Fish</label>
						<input type="checkbox" name="fish" id="fish">
					</li>
					<li>
						<label for="vegetable">Vegetables</label>
						<input type="checkbox" name="vegetable" id="vegetable">
					</li>
				</ul>
				<div class="clear"></div>
				<div id="settings">
					<input type="button" id="clear_search" value="Clear search">
					<input type="submit" value="Search" id="subm_advanced">
					<div class="clear"></div>
				</div>
			</form>
		</div>
		<a href="/"><img id="logo" src="medias/img/logo.png"></a>
        <form id="log" action="" method="POST">
			<input type="text" id="login" class="items" name="login" placeholder="Mail address" required>
			<input type="password" id="mdp" class="items" name="mdp" placeholder="Password" required>
			<input type="submit" value="OK" id="subm_log" class="items"><br /> 
			<p>Don't have an account yet ? <span id="register">Let's register</span></p>
			<div class="clear"></div>
		</form>
		<div class="clear"></div>
	</div>
</div>
