$(document).ready(function()
{
	var bounds = new L.LatLngBounds([48.80700, 2.19071], [48.92219, 2.44751]);
	
	var map = L.map('map', 
	{
		center: [48.856614,2.352222],
		zoom: 12,
		minZoom: 12
	});
	
	var icoBruger = L.icon({
		iconUrl: 'medias/img/ico_map/burger.png',
		iconSize: [40, 30],
		iconAnchor: [20,30],
		popupAnchor: [0, -40]
	});
	
	var marker = L.marker([48.856614,2.352222], {icon: icoBruger}).addTo(map);
	
	var apikey = "78e2c83d5e024ac28e5290e97ed9a0de";
	var idmap = "113366";

	L.tileLayer('http://{s}.tile.cloudmade.com/'+apikey+'/'+idmap+'/256/{z}/{x}/{y}.png', 
	{
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		maxZoom: 18
	}).addTo(map);
});