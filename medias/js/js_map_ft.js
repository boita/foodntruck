/*$(document).ready(function()
{
	var map = L.map('map').setView([48.856614,2.352222], 13);

	

	L.tileLayer('http://{s}.tile.cloudmade.com/'+apikey+'/'+idmap+'/256/{z}/{x}/{y}.png', 
	{
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery Â© <a href="http://cloudmade.com">CloudMade</a>',
		maxZoom: 18
	}).addTo(map);
	var apikey = "78e2c83d5e024ac28e5290e97ed9a0de";
	var idmap = "113366";
	var loadMap = function (id) {
    var PARIS = [48.861037,2.335666];
    var map = L.map(id);
    var tile_url = 'http://{s}.tile.cloudmade.com/'+apikey+'/'+idmap+'/256/{z}/{x}/{y}.png';
    var layer = L.tileLayer(tile_url, {
        attribution: 'OSM'
    });
    map.addLayer(layer);
    map.setView(PARIS, 15);

    map.locate({setView: true, watch: true}) This will return map so you can do chaining 
        .on('locationfound', function(e){
            var marker = L.marker([e.latitude, e.longitude]).bindPopup('Tu es ici boloss');
            map.addLayer(marker);           
        })
       .on('locationerror', function(e){
            console.log(e);
        });
};

loadMap('mini-map');
});*/

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