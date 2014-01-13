$("#gobot").click(function()
{
	_gaq.push(['_trackEvent', 'GoBot', 'Click', 'GoBot']);
	// console.log('fkdjsj');
});

var ablegobot = 1;

$(function()
{
	sizeMap();
	positionGoBot();
});

$(window).resize(function()
{
	sizeMap();
	sizeBlocBottom();
	positionGoBot();
});

$(window).load(function()
{
	sizeBlocBottom();
	$("#loading").delay(1000).fadeOut();
});

$(document).ready(function()
{
	$(document).on('mouseover', '.add_fav', function()
	{
		$(this).attr('src','medias/img/pop_up/coeur.png');
	});
	
	$(document).on('mouseout', '.add_fav', function()
	{
		$(this).attr('src','medias/img/pop_up/coeur_blanc.png');
	});

	$("#gobot").click(function()
	{	
		calculateScrollBot();
		rotateBtnGoBot();
	});
});

function sizeMap()
{
	var wheader = $("#header").outerHeight();
	var w = $(window).width();
	var h = $(window).height();
	
	h = h - wheader;
	h = h - (h * (10/100));
	
	$("#bloc_map").height(h);
	
	if(w <= 1048)
	{
		$("#map").width(1048);
		$("#header").width(1048);
		$("#footer").width(1048);
		$("#container_bottom").width(1048);
		$("body").css('overflow-x','scroll');
	}
	
	else
	{
		$("#map").width('100%');
		$("#header").width('100%');
		$("#container_bottom").width('100%');
		$("#footer").width('100%');
		$("body").css('overflow-x','');
	}
}

function sizeBlocBottom()
{
	var h = $(window).height();
	var hbottom = $("#bottom").outerHeight();
	var hfooter = $("#footer").outerHeight();
	if(h - hfooter < hbottom)
	{
		$("#container_bottom").height(h - hfooter);
		$("#container_bottom").css('overflow-y','scroll');
	}
	else
	{
		$("#container_bottom").height(hbottom);
		$("#container_bottom").css('overflow-y','');
	}
}

function calculateScrollBot()
{
	if(ablegobot == 1)
	{
		ablegobot = 0;
		if($("html").scrollTop() == 0 && $("body").scrollTop() == 0)
		{
			var hmap = $("#map").height();
			var hheader = $("#header").height() + 15;
			var scroll = hmap + hheader;
			
			$("body,html").animate(
			{
				'scrollTop': scroll
			});
			
			$("#gobot").removeClass('turnback');
			$("#gobot").addClass('turn');
			ablegobot = 1;
		}
		else
		{
			$("body,html").animate(
			{
				'scrollTop': '0'
			});
			
			$("#gobot").removeClass('back');
			$("#gobot").addClass('turnback');
			ablegobot = 1;
		}
	}
}

function rotateBtnGoBot()
{
	if($("html").scrollTop() == 0 && $("body").scrollTop() == 0)
	{
		$("#gobot").removeClass('turnback');
		$("#gobot").addClass('turn');
	}
	else
	{
		$("#gobot").removeClass('back');
		$("#gobot").addClass('turnback');
	}
}

function positionGoBot()
{
	var w = $(window).width();
	var left = (w/2) - (50/2);
	
	var hfooter = $("#footer").outerHeight();
	
	$("#gobot").css('left',left);
	$("#gobot").css('bottom',hfooter);
}

function defineAdvancedWidth()
{
	var maxsize = 0;
	
	$("#advanced li").each(function()
	{
		var labelw = $(this).width();
		if(labelw > maxsize)
		{
			maxsize = labelw;
		}
	});
	
	$("#advanced li").each(function()
	{
		$(this).width(maxsize);
	});
	
	var labelsize = $("#advanced li").outerWidth();
	var advancedsize = 3 * labelsize;
	
	$("#advanced").width(advancedsize);
	initadvancedonce = 0;
	console.log('fdfsd');
}

function chooseTastes(taste)
{
	if(taste.hasClass('chosen'))
	{
		taste.removeClass('chosen');
	}
	else
	{
		taste.addClass('chosen');
	}
}