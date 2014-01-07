$(".cta").click(function()
{
	_gaq.push(['_trackEvent', 'Add', 'Click', 'Add to cart']);
});

$(document).on('click','.remove_prod', function()
{
	_gaq.push(['_trackEvent', 'Remove', 'Click', 'RemoveProd']);
	console.log('test');
});

$(document).ready(function()
{

	/*****GESTION DES FILTRES DE MENU********/
	/*NEXT STEP: MAKE IT TOGGABLE?*/

	$('#categ ul li').click(function()
	{
		/*recuperation du nom de la classe*/
		var myClass = $(this).attr("class");
		var splitClass = myClass.split('-')[1];
		var itemClass = 'i'+splitClass;
		/*on cache toutes les div et on fait apparaitre la bonne*/
		$(".item").each(function()
		{
			var thisClass = $(this).attr('class').split(' ')[1];
			if(thisClass != itemClass)
			{
				$(this).css('display','none');
			}
		});
		$(".item").each(function()
		{
			var thisClassExist = $(this).attr('class').split(' ')[1];
			console.log(thisClassExist+' == '+itemClass+'test');
			if(thisClassExist == itemClass)
			{
				$(this).css('display','block');
			}
		});
	});
	
	$('.c-all').click(function()
	{
		$('.item').css('display','block');
	});
});
	
$(window).resize(function() 
{
	sizeMap();
});

$(function()
{
	sizeMap();
});

function sizeMap()
{
	var w = $(window).width();
	
	if(w <= 1048)
	{
		$("#header").width(1048);
		$("#footer").width(1048);
		$("body").css('overflow-x','scroll');
	}
	
	else
	{
		$("#header").width('100%');
		$("#footer").width('100%');
		$("body").css('overflow-x','');
	}
}
	
/***********Panier***********/

$(document).ready(function() 
{
	$(".cta").click(function()
	{
		var clicked = $(this);
		addToCart(clicked);
		CountItemCart();
		calculateTotal();
	});
	
	$(document).on('change', '.quantity', function()
	{
		var clicked = $(this);
		changeQuantity(clicked);
		CountItemCart();
		calculateTotal();
	});
	
	$(document).on('click', '.remove_prod', function()
	{
		$(this).parent('.elmt_panier').remove();
		CountItemCart();
		calculateTotal();
	});
});

$(window).load(function()
{
	var menu_container = $("#menu_container").outerHeight();
	$("#pres").height(menu_container);
});

function addToCart(clicked)
{
	$("#panier").fadeIn();
	var price = clicked.prev('.containdesc').children('.price').text().split('€')[0];
	var elmt = clicked.prev('.containdesc').children('h4').text();
	var which = clicked.parent('.item').attr('class').split(' ')[2];
	var basktexist = $("#content_panier .elmt_panier").length;
	var imgsrc = clicked.prev('.containdesc').children('img').attr('src');
	
	if(basktexist > 0)
	{
		var elmtexist = 0;
		$("#content_panier .elmt_panier").each(function()
		{
			if($(this).hasClass(which))
			{
				elmtexist = 1;
			}
		});
		
		if(elmtexist == 0)
		{
			$("#content_panier").append('<div class="'+which+' elmt_panier"><div class="bloc_visuel"><img src="'+imgsrc+'" class="visuel_prod" /></div><div class="bloc_panier_left"><span class="name_prod">'+elmt+'</span><input type="number" value="1" min="0" class="quantity"><span class="price_prod">'+price+'€</span></div><img src="/medias/img/suppr_menu.png" class="remove_prod" /><div class="clear"></div></div>');
		}
		else
		{
			var target = $("#content_panier").children('.'+which).children(".bloc_panier_left");
			var quantity = target.children('.quantity').val();
			var totalprice = target.children('.price_prod').text();
			
			quantity = parseInt(quantity) + 1;
			totalprice = totalprice.replace(',','.');
			price = price.replace(',','.');
			totalprice = parseInt(totalprice) + parseInt(price);
			target.children('.quantity').val(quantity);
			target.children('.price_prod').text(totalprice+',00€'); 
		}
	}
	else
	{
		$("#content_panier").append('<div class="'+which+' elmt_panier"><div class="bloc_visuel"><img src="'+imgsrc+'" class="visuel_prod" /></div><div class="bloc_panier_left"><span class="name_prod">'+elmt+'</span><input type="number" value="1" min="0" class="quantity"><span class="price_prod">'+price+'€</span></div><img src="/medias/img/suppr_menu.png" class="remove_prod" /><div class="clear"></div></div>');
	}
}

function CountItemCart()
{
	var count_elmt = 0;
	$(".elmt_panier").each(function()
	{
		count_elmt = count_elmt + 1;
	});
	if(count_elmt < 1)
	{
		$("#panier").hide("slide", { direction: "up" }, 200); 
	}
	else
	{
		$("#nb_item").text(count_elmt+" item in your cart");
	}
}

function changeQuantity(clicked)
{
	var nbr_prod = clicked.val();
	if(nbr_prod < 1)
	{
		clicked.parent('.bloc_panier_left').parent('.elmt_panier').remove();
	}
	else
	{
		var which = clicked.parent('.bloc_panier_left').parent('.elmt_panier').attr('class').split(' ')[0];
		var unit_price = $("#menu").children('.'+which).children('.containdesc').children('.price').text();
		unit_price = unit_price.split('€')[0].replace(',','.');
		var total_price = nbr_prod * unit_price;
		
		$('.'+which).children('.bloc_panier_left').children('.price_prod').text(total_price+',00€');
	}
	
	/*var which = clicked.parent('.elmt_panier').attr('class').split(' ')[0];
	var actualqtt = $('.'+which).children('.quantity').text();
	var totalprice = $('.'+which).children('.price_prod').text();
	totalprice = totalprice.replace(',','.');
	var unitprice = parseInt(totalprice) / parseInt(actualqtt);
	
	var newqtt = parseInt(actualqtt) + 1;
	$('.'+which).children('.quantity').text(newqtt);
	newprice = parseInt(totalprice) + parseInt(unitprice);
	newprice = newprice;
	$('.'+which).children('.price_prod').text(newprice);*/
}

function calculateTotal()
{
	var globalprice = 0;
	$(".elmt_panier .price_prod").each(function()
	{
		var thisprice = $(this).text();
		thisprice = thisprice.split('€')[0].replace(',','.');
		globalprice = globalprice + parseInt(thisprice);
	});
	
	$("#total_price").text(globalprice+(',00€'));
}
	
/*function removeProdFromCart(clicked)
{
	var which = clicked.parent('.elmt_panier').attr('class').split(' ')[0];
	var actualqtt = $('.'+which).children('.quantity').text();
	var totalprice = $('.'+which).children('.price_prod').text();
	totalprice = totalprice.replace(',','.');
	var unitprice = parseInt(totalprice) / parseInt(actualqtt);
	
	var newqtt = actualqtt - 1;
	if(newqtt < 1)
	{
		$('#panier .'+which).remove();
	}
	else
	{
		$('.'+which).children('.quantity').text(newqtt);
		newprice = parseInt(totalprice) - parseInt(unitprice);
		newprice = newprice;
		$('.'+which).children('.price_prod').text(newprice);
	}
}*/
