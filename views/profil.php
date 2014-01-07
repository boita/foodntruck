<?php
// profil.php : view
?>
<div id="pop_up_taste">
	<div id="content_taste">
		<div class="header_pop">
			<p class="title_pop">Manage your tastes</p>
			<p id="close_pop_taste">X</p>
		</div>
		<form id="all_tastes_pop" method="POST" action="tstprofil.php">
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
			<div id="pop_taste_settings">
				<input type="button" value="Clear all" id="clear_tastes">
				<input type="submit" value="Update" id="update_taste">
				<div class="clear"></div>
			</div>
		</form>
	</div>
</div>

<div id="interface_profil">
	<div id="bloc_left">
		<img src="medias/img/beauroux.jpg" id="photo_profil" />
		<div id="about_me">
			<div id="bloc_about_me">
				<p class="first_name"><? echo $first_name; ?></p>
				<p class="last_name"><? echo $last_name; ?></p>
				<p class="birth"><? echo $birth; ?></p>
				<p class="mail"><? echo $_SESSION['compte']; ?></p>
				<!--<div id="social_bloc">
					<a href="#"><img src="medias/img/profil/facebook2.png" /></a>
					<a href="#"><img src="medias/img/profil/twitter2.png" /></a>
				</div>-->
				<p id="bloc_change_info"><span id="change_info">Editer</span></p>
			</div>
			<p id="close_change_me">X</p>
			<form method="POST" action="profil.php" id="change_info_me">
				<input type="text" class="inp_fname" name="first_name" value="<? echo $first_name; ?>" placeholder="first name">
				<input type="text" class="inp_lname" name="last_name" value="<? echo $last_name; ?>" placeholder="last name">
				<input type="text" class="inp_birth" name="birth" value="<? echo $birth; ?>" placeholder="birth : 08/10/1984">
				<input type="text" class="inp_mail" name="mail" value="<? echo $_SESSION['compte']; ?>" placeholder="johnny.doe@gmail.com">
				<input type="password" class="inp_pass" name="pass" placeholder="Password">
				<input type="password" class="inp_pass" name="pass_conf" placeholder="Confirm your password">
				<input type="submit" value="Update" id="subm_change_me">
			</form>
		</div>
	</div>
	<div id="bloc_right">
		<div id="adresses" class="bloc_profil">
			<p class="titre_bloc">My favorites addresses</p>
			<div id="container_adresse" class="container_bloc_profil">
				<div id="all_addresses">
					<div class="bloc_adresse">
						<div class="container_adresse">
							<div class="adresse">
								<p>108 Rue Saint-Lazare</p>
								<p>Paris 09</p>
							</div>
							<div class="manage_adresse">
								<img src="medias/img/profil/corbeille.png" class="suppr" />
							</div>
						</div>
						<div class="change_adresse">
							<form class="chng_adrs" method="" action="">
								<input type="text" name="adresse" placeholder="108 Rue Saint-Lazare">
								<input type="text" name="zipcode" placeholder="Paris 09">
								<input type="submit" value="Update">
							</form>
						</div>
					</div>
					<div class="bloc_adresse">
						<div class="container_adresse">
							<div class="adresse">
								<p>63 Boulevard de Rochechouart</p>
								<p>Paris 15</p>
							</div>
							<div class="manage_adresse">
								<img src="medias/img/profil/corbeille.png" class="suppr" />
							</div>
						</div>
						<div class="change_adresse">
							<form class="chng_adrs" method="" action="">
								<input type="text" name="adresse" placeholder="63 Boulevard de Rochechouart">
								<input type="text" name="zipcode" placeholder="Paris 15">
								<input type="submit" value="Update">
							</form>
						</div>
					</div>
					<div class="bloc_adresse">
						<div class="container_adresse">
							<div class="adresse">
								<p>7 Rue Pierre Lescot</p>
								<p>Paris 12</p>
							</div>
							<div class="manage_adresse">
								<img src="medias/img/profil/corbeille.png" class="suppr" />
							</div>
						</div>
						<div class="change_adresse">
							<form class="chng_adrs" method="" action="">
								<input type="text" name="adresse" placeholder="7 Rue Pierre Lescot">
								<input type="text" name="zipcode" placeholder="Paris 12">
								<input type="submit" value="Update">
							</form>
						</div>
					</div>
					<div class="bloc_adresse">
						<div class="container_adresse">
							<div class="adresse">
								<p>43 Boulevard Haussmann</p>
								<p>Paris 02</p>
							</div>
							<div class="manage_adresse">
								<img src="medias/img/profil/corbeille.png" class="suppr" />
							</div>
						</div>
						<div class="change_adresse">
							<form class="chng_adrs" method="" action="">
								<input type="text" name="adresse" placeholder="43 Boulevard Haussmann">
								<input type="text" name="zipcode" placeholder="Paris 02">
								<input type="submit" value="Update">
							</form>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div id="bloc_add_address">
					<form id="form_add_address">
						<label for="adresse">Address :</label>
						<input type="text" name="adresse" id="adresse" placeholder="18 rue de la chance">
						<label for="zipcode">Zip code :</label>
						<input type="text" id="zipcode" name="zipcode" placeholder="75009">
						<input type="image" id="subm_adresse" src="medias/img/profil/plus2.png">
						<div class="clear"></div>
					</form>
				</div>
			</div>
			<img id="add_new_address" src="medias/img/profil/plus.png" alt="Add new address" title="Add new address" />
		</div>
		<div id="gouts" class="bloc_profil">
			<p class="titre_bloc">My tastes</p>
			<div id="all_tastes" class="container_bloc_profil">
				<ul> 
					<!--<li>
						<img src="medias/img/profil/check.png" class="suppr_tast" />
						<span>Burgers</span>
					</li> 
					<li>
						<img src="medias/img/profil/check.png" class="suppr_tast" />
						<span>Hot-dogs</span>
					</li> 
					<li>
						<img src="medias/img/profil/check.png" class="suppr_tast" />
						<span>Pasta</span>
					</li> 
					<li>
						<img src="medias/img/profil/check.png" class="suppr_tast" />
						<span>Bagels</span>
					</li> 
					<li>
						<img src="medias/img/profil/check.png" class="suppr_tast" />
						<span>Ice-cream</span>
					</li>-->
				</ul>
				<div class="clear"></div>
			</div>
			<img src="medias/img/profil/plus.png" alt="Add a taste" title="Add a taste" id="add_new_taste" />
		</div>
		<div id="favorites" class="bloc_profil">
			<p class="titre_bloc">My favorites trucks</p>
			<div id="all_favorites_trucks" class="container_bloc_profil">
				<div class="bloc_fav_truck">
					<img src="medias/img/profil/refectoire.png" class="logo_truck" />
					<div class="about_truck">
						<p class="name_truck">Le Refectoire</p>
						<a href="http://www.le-refectoire.com/" target="_blank" class="link_site">www.le-refectoire.com</a>
					</div>
					<div class="share">
						<img src="medias/img/profil/facebook.png" />
						<img src="medias/img/profil/twitter.png" />
					</div>	
				</div>
				<div class="bloc_fav_truck">
					<img src="medias/img/profil/cdoree.png" class="logo_truck" />
					<div class="about_truck">
						<p class="name_truck">La Caravane Dorée</p>
						<a href="http://www.caravane-doree.com/" class="link_site" target="_blank">www.caravane-doree.com</a>
					</div>
					<div class="share">
						<img src="medias/img/profil/facebook.png" />
						<img src="medias/img/profil/twitter.png" />
					</div>	
				</div>
				<div class="bloc_fav_truck">
					<img src="medias/img/profil/cantine.png" class="logo_truck" />
					<div class="about_truck">
						<p class="name_truck">Cantine California</p>
						<a href="http://www.cantinecalifornia.com/" target="_blank" class="link_site">www.cantinecalifornia.com</a>
					</div>
					<div class="share">
						<img src="medias/img/profil/facebook.png" />
						<img src="medias/img/profil/twitter.png" />
					</div>	
				</div>
				<div class="clear"></div>
			</div>
			<img src="medias/img/profil/plus.png" alt="Add a truck" title="Add a truck" id="add_new_fav_truck" />
		</div>
		<div div id="histor" class="bloc_profil">
			<p class="titre_bloc">Orders historie</p>
			<div class="bloc_commande com_left">
				<img src="medias/img/profil/mdespres.png" class="logo_truck" />
				<div class="about_truck">
					<p class="name_truck">Marguerite du Pré</p>
					<p class="en_cours">Order in progress...<p>
				</div>
				<p class="recap">Summary</p>
			</div>
			<div class="bloc_commande com_right">
				<img src="medias/img/profil/camionquifume.png" class="logo_truck" />
				<div class="about_truck">
					<p class="name_truck">Le camion qui fume</p>
					<p class="etat_commande">You already ate it<p>
				</div>
				<p class="recap">Summary</p>
			</div>
			<div class="bloc_commande com_left">
				<img src="medias/img/profil/bcomme.png" class="logo_truck" />
				<div class="about_truck">
					<p class="name_truck">B comme Burgui</p>
					<p class="etat_commande">You already ate it<p>
				</div>
				<p class="recap">Summary</p>
			</div>
			<div class="bloc_commande com_right">
				<img src="medias/img/profil/eattheroad.png" class="logo_truck" />
				<div class="about_truck">
					<p class="name_truck">Eat the Road</p>
					<p class="etat_commande">You already ate it<p>
				</div>
				<p class="recap">Summary</p>
			</div>
			<div id="recap_model" style="display: none;">
				<div id="content_recap">
					<img src="medias/img/profil/mdespres.png" id="recap_logo" class="elmt_recap" />
					<table class="elmt_recap">
						<tr>
							<td class="quantity">2</td>
							<td class="food">Pounder with cheese</td>
							<td class="price">16,00€</td>
						</tr>
						<tr>
							<td class="quantity">2</td>
							<td class="food">Big coke</td>
							<td class="price">4,00€</td>
						</tr>
						<tr>
							<td class="quantity">1</td>
							<td class="food">Fries</td>
							<td class="price">3,50€</td>
						</tr>
					</table>
					<div id="about_recap" class="elmt_recap">
						<p class="date">12/19/2013</p>
						<p class="total_price">23,50€</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
