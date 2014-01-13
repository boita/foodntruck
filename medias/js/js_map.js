$(document).ready(function()
{
	var bounds = new L.LatLngBounds([48.80700, 2.19071], [48.92219, 2.44751]);
	
	var map = L.map('map', 
	{
		center: [48.856614,2.352222],
		zoom: 13,
		minZoom: 12
	});
	
	var apikey = "78e2c83d5e024ac28e5290e97ed9a0de";
	var idmap = "113366";

	L.tileLayer('http://{s}.tile.cloudmade.com/'+apikey+'/'+idmap+'/256/{z}/{x}/{y}.png', 
	{
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		maxZoom: 18
	}).addTo(map);
	
	var icoGlace = L.icon({
		iconUrl: 'medias/img/ico_map/glace.png',
		iconSize: [23,30],
		iconAnchor: [12,30],
		popupAnchor: [0, -23]
	});
	
	var icoSalade = L.icon({
		iconUrl: 'medias/img/ico_map/salade.png',
		iconSize: [36, 28],
		iconAnchor: [17,28],
		popupAnchor: [0, -36]
	});
	
	var icoBruger = L.icon({
		iconUrl: 'medias/img/ico_map/burger.png',
		iconSize: [40, 30],
		iconAnchor: [20,30],
		popupAnchor: [0, -40]
	});
	
	var pop_up = document.createElement('DIV');
	pop_up.innerHTML = "<div class='pop_content'><div class='name_fav'><img src='medias/img/pop_up/coeur_blanc.png' class='add_fav'><p class='name_truck'>Cantine California</p><div class='clear'></div></div><div class='about_truck'><div class='bloc_img_descr'><img src='medias/img/pop_up/california_truck.png' class='pop_img_truck' /><div class='descr'><p>Cantine california allows you to choose between handmade tacos and burgers noon and French toast or Breakfast Burito. Really tasty, you can find this truck not far from Marché Raspail.</p><div class='type_food'><img src='medias/img/pop_up/burger.png' /><img src='medias/img/pop_up/salade.png' /></div></div><div class='clear'></div></div></div><div class='pop_content_bot'><div class='infos_truck'><div class='hours rate_hours'><img src='medias/img/pop_up/horloge.png' class='clock' /><p><span class='start'>11</span>h - <span class='end'>14</span>h</p></div><div class='rating rate_hours'><span>Rate : </span><div class='rating'><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/white.png' /></div></div><div class='clear'></div><div class='bloc_location'><img src='medias/img/pop_up/metro.png' class='metro' /><span class='location'>164 Rue Jeanne d'Arc, 75013 PARIS</span></div></div><a class='pop_see_more' href='foodtruck.html'>See more</a><div class='clear'></div></div></div>";
	var pop_up_1 = document.createElement('DIV');
	pop_up_1.innerHTML = "<div class='pop_content'><div class='name_fav'><img src='medias/img/pop_up/coeur_blanc.png' class='add_fav'><p class='name_truck'>gastropod</p><div class='clear'></div></div><div class='about_truck'><div class='bloc_img_descr'><img src='medias/img/pop_up/california_truck.png' class='pop_img_truck' /><div class='descr'><p>A native of Miami, Florida, Chef Jeremiah continues to build his reputation as one of South Florida's most innovative purveyors of haute cuisine.</p><div class='type_food'><img src='medias/img/pop_up/burger.png' /><img src='medias/img/pop_up/salade.png' /></div></div><div class='clear'></div></div></div><div class='pop_content_bot'><div class='infos_truck'><div class='hours rate_hours'><img src='medias/img/pop_up/horloge.png' class='clock' /><p><span class='start'>11</span>h - <span class='end'>14</span>h</p></div><div class='rating rate_hours'><span>Rate : </span><div class='rating'><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/white.png' /></div></div><div class='clear'></div><div class='bloc_location'><img src='medias/img/pop_up/metro.png' class='metro' /><span class='location'>173 Rue Saint-Maur, 75011 PARIS</span></div></div><a class='pop_see_more' href='foodtruck.html'>See more</a><div class='clear'></div></div></div>";
	var pop_up_2 = document.createElement('DIV');
	pop_up_2.innerHTML = "<div class='pop_content'><div class='name_fav'><img src='medias/img/pop_up/coeur_blanc.png' class='add_fav'><p class='name_truck'>Lardo</p><div class='clear'></div></div><div class='about_truck'><div class='bloc_img_descr'><img src='medias/img/pop_up/california_truck.png' class='pop_img_truck' /><div class='descr'><p>Starting life as a food cart in SE Portland, rarely has a spot been so aptly named. Rocking an ancient charcuterie moniker that truly serves as a harbinger of things to come, Lardo is a sandwich shop that worships at the alter of  bovine & swine.</p><div class='type_food'><img src='medias/img/pop_up/burger.png' /><img src='medias/img/pop_up/salade.png' /></div></div><div class='clear'></div></div></div><div class='pop_content_bot'><div class='infos_truck'><div class='hours rate_hours'><img src='medias/img/pop_up/horloge.png' class='clock' /><p><span class='start'>11</span>h - <span class='end'>14</span>h</p></div><div class='rating rate_hours'><span>Rate : </span><div class='rating'><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/white.png' /></div></div><div class='clear'></div><div class='bloc_location'><img src='medias/img/pop_up/metro.png' class='metro' /><span class='location'>23 Rue d'Astorg, 75008 PARIS</span></div></div><a class='pop_see_more' href='foodtruck.html'>See more</a><div class='clear'></div></div></div>";
	var pop_up_3 = document.createElement('DIV');
	pop_up_3.innerHTML = "<div class='pop_content'><div class='name_fav'><img src='medias/img/pop_up/coeur_blanc.png' class='add_fav'><p class='name_truck'>Fojol</p><div class='clear'></div></div><div class='about_truck'><div class='bloc_img_descr'><img src='medias/img/pop_up/california_truck.png' class='pop_img_truck' /><div class='descr'><p>While the fojol bros. may represent something different to each of us, they hope to bring together local communities through a dynamic food experience on DC's streets.</p><div class='type_food'><img src='medias/img/pop_up/burger.png' /><img src='medias/img/pop_up/salade.png' /></div></div><div class='clear'></div></div></div><div class='pop_content_bot'><div class='infos_truck'><div class='hours rate_hours'><img src='medias/img/pop_up/horloge.png' class='clock' /><p><span class='start'>11</span>h - <span class='end'>14</span>h</p></div><div class='rating rate_hours'><span>Rate : </span><div class='rating'><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/blue.png' /><img src='medias/img/pop_up/white.png' /></div></div><div class='clear'></div><div class='bloc_location'><img src='medias/img/pop_up/metro.png' class='metro' /><span class='location'>Avenue de Lowendal, 75007 PARIS</span></div></div><a class='pop_see_more' href='foodtruck.html'>See more</a><div class='clear'></div></div></div>";
	
	var marker1 = L.marker([48.837379,2.358627], {icon: icoBruger}).addTo(map);
	marker1.bindPopup(pop_up,{minWidth : 450});
	marker1.on('popupopen', function()
	{
		$("#advanced").hide()
		_gaq.push(['_trackEvent', 'Marker', 'Click', 'OpenPopUpBurger']);
	});
	
	var marker2 = L.marker([48.869909,2.372704], {icon: icoSalade}).addTo(map);
	marker2.bindPopup(pop_up_1,{minWidth : 450});
	marker2.on('popupopen', function()
	{
		$("#advanced").hide();
		_gaq.push(['_trackEvent', 'Marker', 'Click', 'OpenPopUpSalade']);
	});
	
	var marker3 = L.marker([48.873748,2.319145], {icon: icoGlace}).addTo(map);
	marker3.bindPopup(pop_up_2,{minWidth : 450});
	marker3.on('popupopen', function()
	{
		$("#advanced").hide();
		_gaq.push(['_trackEvent', 'Marker', 'Click', 'OpenPopUpGlace']);
	});
	
	var marker4 = L.marker([48.851388,2.304726], {icon: icoSalade}).addTo(map);
	marker4.bindPopup(pop_up_3,{minWidth : 450});
	marker4.on('popupopen', function()
	{
		$("#advanced").hide();
		_gaq.push(['_trackEvent', 'Marker', 'Click', 'OpenPopUpSalade']);
	});
	
	$('#inp_search').keyup(function()
	{
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'http://foodntruck.com/api/recherche.php',
			data: {
				ajax: true,
				recherche: $('#inp_search').val()
			},
			
			success: function(data, textStatus, jqXHR) {
				
				i = 0;
				for (i = 1; i <= 4; i++) map.removeLayer(eval('marker' + i));
				
				var add = '';
				$.each(data, function(key, value) {
					add = 'marker' + value.fc_id;
					map.addLayer(eval(add));
				});
			},
			
			error: function(jqXHR, textStatus, errorThrown) {
				alert("Problème de chargement.");
			}
		});
	});
	
	$("#show_menu").click(function()
	{
		map.closePopup();
	});
	
	$("#news1").click(function()
	{
		$("body").animate(
		{
			'scrollTop': 0
		});
		rotateBtnGoBot();
		marker1.openPopup(pop_up,{minWidth : 450});
	});
	
	$("#news2").click(function()
	{
		$("body").animate(
		{
			'scrollTop': 0
		});
		rotateBtnGoBot();
		marker2.openPopup(pop_up,{minWidth : 450});
	});
});