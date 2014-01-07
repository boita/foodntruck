<?php
	include('includes/header.php');
?>
<div id="pop_up_taste">
	<div id="content_taste">
		<div class="header_pop">
			<p class="title_pop">Manage your tastes</p>
			<p id="close_pop_taste">X</p>
		</div>
		<form id="all_tastes" method="" action="">
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
<?php
	include('includes/menu_co_truck.php');
	include('includes/register_form.php');
?>


<div id="interface_profil">
	<?php
		include('include/register_form.php');
	?>
	<div id="bloc_left">
		<img src="medias/img/camionfume.png" id="photo_profil" />
		<div id="about_me">
			<p class="first_name">Le camion qui fume</p>
			<p class="mail">www.camionquifume.com</p>
			<div id="social_bloc">
				<a href="#"><img src="medias/img/profil/facebook2.png" /></a>
				<a href="#"><img src="medias/img/profil/twitter2.png" /></a>
			</div>
			<p id="bloc_change_info"><span id="change_info">Editer</span></p>
		</div>
	</div>
	<div id="bloc_right">
		<div id="tournees" class="bloc_profil">
		
			<p class="titre_bloc">Tour</p>
            <div class="tour-block">
            	<span>Date: <span class="tour-info">00/00/00</span> From <span class="tour-info">00h00</span> to <span class="tour-info">00h00</span> at <span class="tour-info">Place de la république, 75000</span></span> <img class="delete" src="medias/img/profil/croix.png" style="transform:rotate(45deg);" />
            </div> 
            
            
			<div class="tour-block" id="tour-block-new">
			
				<input type="text" class="datepicker">
				<span>from </span>
<select>
  <option value="11:30">11h30</option>
  <option value="12:00">12h00</option>
  <option value="12:30">12h30</option>
  <option value="13:00">13h00</option>
</select>
				<span>to  </span>
<select>
  <option value="11:30">11h30</option>
  <option value="12:00">12h00</option>
  <option value="12:30">12h30</option>
  <option value="13:00">13h00</option>
</select>
				<input type="text" class="adresse-truck" placeholder="Truck location">
				<input style="float:right" type="button" id="save_time_truck" class="add_btn" value="Save">
			</div>
			
<img id="add_new_tour" src="medias/img/profil/plus.png" />
			
			
		</div>
		
		
		
		<div id="gouts" class="bloc_profil">
		  <div id="all_tastes" class="container_bloc_profil">
            <p class="titre_bloc">Specialties</p>
			<ul> 
				<li>
					<img src="medias/img/profil/check_blue.png" />
					<span>Burgers</span>
				</li> 
				<li>
					<img src="medias/img/profil/check_blue.png" />
					<span>Hot-dogs</span>
				</li> 
				<li>
					<img src="medias/img/profil/check_blue.png" />
					<span>Pasta</span>
				</li> 
				<li>
					<img src="medias/img/profil/check_blue.png" />
					<span>Bagels</span>
				</li> 
				<li>
					<img src="medias/img/profil/check_blue.png" />
					<span>Ice-cream</span>
				</li>
				<li id="add_gout">
					<img src="medias/img/profil/check_blue.png" alt="Add a taste" title="Add a taste" />
				</li>
			</ul>
			<div class="clear"></div>
          </div>
          <img src="medias/img/profil/plus.png" alt="Add a taste" title="Add a taste" id="add_new_taste" />
		</div>
		<div id="menu" class="bloc_profil">
		<p class="titre_bloc">My menu</p>
		<div class="item iburger item1">
					<div class="containdesc">
						<img src="medias/img/page_ft/burger.jpg"/>	
						<h4>Double fire burger of doom</h4>
						<p>Description of the meal and the ingredients<br/>
						Ingredients: Panda steaks, from Ukrain (Tchernobyl), industrial bread
						</p>
						<div class="price">17,00€</div>	
					</div>
					<div class="cta">Editer</div>
				</div>
                
                <!--EDITION-->
                
                <div class="containdesc_edit">
                <input style="float:left; margin:30px 0 0 10px;" type="button" id="save_time_truck" class="add_btn" value="Change picture">
                <textarea style="margin:10px 0 0 20px; width:400px; height:80px;" placeholder="Description..."></textarea>
                <input type="text" style="color:red ;font-weight:bold;width:70px; height:30px; text-align:center; margin-botom:60px; margin-left:40px;" placeholder="00,00">
                </div>
                
                
                <!---->
                
				
				<div class="item iburger item2">
				<div class="containdesc">
					<img src="medias/img/page_ft/burger2.jpg"/>
					<h4>Burger with vegetables</h4>
					<p>Description of the meal and the ingredients<br/>
					Ingredients: Oignons, salad, dog meat and rainbows.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Editer</div>
				</div>
				
				<div class="item ifries item3">
				<div class="containdesc">
					<img src="medias/img/page_ft/fries.jpg"/>
					<h4>Epic fries of darkness</h4>
					<p>Description of the meal and the ingredients<br/>
					Ingredients: Potatoes from MacDonald.
					</p>
					<div class="price">17,00€</div>	
					
				</div>
				<div class="cta">Editer</div>
				</div>
				
				<div class="item idessert item4">
				<div class="containdesc">
					<img src="medias/img/page_ft/crepe.jpg"/>
					<h4>RIP dead crepe in heaven</h4>
					<p>Description of the meal and the ingredients<br/>
					Ingredients: Chocolate crepe, with a cherry on 'the not cake' top.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Editer</div>
				</div>
				
				<div class="item isalad item5">
				<div class="containdesc">
					<img src="medias/img/page_ft/colesaw.jpg"/>
					<h4>Last Coleslaw on earth</h4>
					<p>Description of the meal and the ingredients<br/>
					
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Editer</div>
				</div>
				
				<div class="item isalad item6">
				<div class="containdesc">
					<img src="medias/img/page_ft/salade.jpg"/>
					<h4>Stop raconter des salades</h4>
					<p>Description of the meal and the ingredients<br/>
					Snail salad
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Editer</div>
				</div>
				
				<div class="item idessert item7">
				<div class="containdesc">
					<img src="medias/img/page_ft/cheesecake.jpg"/>
					<h4>Best Cheese cake EUW</h4>
					<p>Description of the meal and the ingredients<br/>
					Awarded best cheese cake EUW by the League of Legends community.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Editer</div>
				</div>
				
				<div class="item idrink item8">
				<div class="containdesc">
					<img src="medias/img/page_ft/coca.jpg"/>
					<h4>Calo Caco from Pipse(diabet in can)</h4>
					<p>Description of the meal and the ingredients<br/>
					Enjoy your cancer with this delicious can of sugar.
					</p>
					<div class="price">17,00€</div>	
				</div>
				<div class="cta">Editer</div>
				</div>
		</div>
	
	</div>
	<div class="clear"></div>
</div>

<div id="footer">
	<div id="footer_content">
		<p>Copyright &copy; Food'n'Truck - <a href="contact.html">About us</a></p>
	</div>
</div>

<script type="text/javascript" src="medias/js/global.js"></script>
<script type="text/javascript" src="medias/js/login-popup.js"></script>
<script type="text/javascript" src="medias/js/profiltruck.js"></script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-45637070-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>