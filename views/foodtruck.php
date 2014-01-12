<?php
// foodtruck.php : view
?>

<div id="bloc_map">

	<?php require_once(dirname(__FILE__) . '/../includes/register_form.php'); ?>

	<div id="container">
	
		<div id="photo_adress">
			<div id="photo_truck">
				<div id="titre_truck">
					<img src="medias/img/pop_up/coeur_blanc.png" alt="Ajoutez aux favoris"/>
					<h2>Le camion qui fume</h2>
				</div>
				<div id="visu_truck">
					<img src="medias/img/page_ft/camion.jpg" alt="Le camion qui fume"/>
				</div>
			</div>
			<div id="map_truck">
				<div id="adresse_truck">					
					<h3>2 place de la bourse 75002 PARIS</h3>
				</div>
				<div id="map">
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="pres_truck">
			<div id="panier">
				<div id="head_panier">
					<p id="descr_panier"><img src="medias/img/panier.png" /><span id="nb_item"></span></p>
					<div id="bloc_content_panier">
						<div id="content_panier">
						</div>
						<div id="bloc_total">
							<p>Total : <span id="total_price"></span></p>
						</div>
						<a href="thanks.php" class="subm_menu">Checkout now</a>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div id="pres">
				<p class="descr_truck">FoodnTruck's authentic Philly Cheesesteaks start with thinly sliced sirloin steak grilled to perfection. We stay true to our cheesesteaks and offer the original "cheese whiz" or your choice of provolone or white american cheese with or without grilled onions. To top it off we use only the freshest hoagie roll that is fit to handle an authentic cheesesteak. 
				</p>
				<div id="types_truck">
					<img src="medias/img/pop_up/frite.png" alt="Fries" />
					<img src="medias/img/pop_up/burger.png" alt="Burgers" />
					<img src="medias/img/pop_up/salade.png" alt="Salads" />
				</div>
				<div class="clear"></div>
				<div id="notation">
					<p class="title-rating">Foodtruck rating</p>
					<div class="notation_gout">
						<span class="label_note">Taste :</span>
						<div class="stars" data-rate="5" data-click="no"></div>
						<div class="clear"></div>
					</div>
					
					<div class="notation_gout">
						<span class="label_note">Service :</span>
						<div class="stars" data-rate="4.8" data-click="no"></div>	
						<div class="clear"></div>		
					</div>
				
					<div class="notation_gout">
						<span class="label_note">Price :</span>
						<div class="stars" data-rate="4.3" data-click="no"></div>	
						<div class="clear"></div>			
					</div>
					
					<div class="notation_gout">
						<span class="label_note">Rapidity :</span>
						<div class="stars" data-rate="3.8" data-click="no"></div>	
						<div class="clear"></div>	
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		
		<div id="menu_container">
			<div id="categ">
				<ul>
					<li class="c-all">Everything</li>
					<li class="c-burger"><i class="icon-fast-food"></i>Burgers</li>
					<li class="c-salad">Salads</li>
					<li class="c-drink"><i class="icon-glass"></i>Drinks</li>
					<li class="c-dessert"><i class="icon-cafe"></i>Desserts</li>
				</ul>
			</div>
			
			<div id="menu">
			
				<div class="item iburger item1 active_item">
					<div class="containdesc">
						<img src="medias/img/page_ft/burger.jpg"/>	
						<h4>Double fire burger of doom</h4>
						<p>Description of the meal and the ingredients<br/>
						Ingredients: Panda steaks, from Ukrain (Tchernobyl), industrial bread
						</p>
						<div class="price">17,00€</div>	
					</div>
					<div class="cta">Ajouter</div>
				</div>
				
				<div class="item iburger item2 active_item">
				<div class="containdesc">
					<img src="medias/img/page_ft/burger2.jpg"/>
					<h4>Burger with vegetables</h4>
					<p>Description of the meal and the ingredients<br/>
					Ingredients: Oignons, salad, dog meat and rainbows.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Ajouter</div>
				</div>
				
				<div class="item ifries item3 active_item">
				<div class="containdesc">
					<img src="medias/img/page_ft/fries.jpg"/>
					<h4>Epic fries of darkness</h4>
					<p>Description of the meal and the ingredients<br/>
					Ingredients: Potatoes from MacDonald.
					</p>
					<div class="price">17,00€</div>	
					
				</div>
				<div class="cta">Ajouter</div>
				</div>
				
				<div class="item idessert item4 active_item">
				<div class="containdesc">
					<img src="medias/img/page_ft/crepe.jpg"/>
					<h4>RIP dead crepe in heaven</h4>
					<p>Description of the meal and the ingredients<br/>
					Ingredients: Chocolate crepe, with a cherry on 'the not cake' top.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Ajouter</div>
				</div>
				
				<div class="item isalad item5 active_item">
				<div class="containdesc">
					<img src="medias/img/page_ft/colesaw.jpg"/>
					<h4>Last Coleslaw on earth</h4>
					<p>Description of the meal and the ingredients<br/>
					
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Ajouter</div>
				</div>
				
				<div class="item isalad item6 active_item">
				<div class="containdesc">
					<img src="medias/img/page_ft/salade.jpg"/>
					<h4>Stop raconter des salades</h4>
					<p>Description of the meal and the ingredients<br/>
					Snail salad
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Ajouter</div>
				</div>
				
				<div class="item idessert item7 active_item">
				<div class="containdesc">
					<img src="medias/img/page_ft/cheesecake.jpg"/>
					<h4>Best Cheese cake EUW</h4>
					<p>Description of the meal and the ingredients<br/>
					Awarded best cheese cake EUW by the League of Legends community.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Ajouter</div>
				</div>
				
				<div class="item idrink item8 active_item">
				<div class="containdesc">
					<img src="medias/img/page_ft/coca.jpg"/>
					<h4>Calo Caco from Pipse(diabet in can)</h4>
					<p>Description of the meal and the ingredients<br/>
					Enjoy your cancer with this delicious can of sugar.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Ajouter</div>
				</div>

			</div>
			
		</div>
		<div class="clear" style="clear:both"></div>
	</div>
</div>