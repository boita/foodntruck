$("#gobot").click(function()
{
	_gaq.push(['_trackEvent', 'GoBot', 'Click', 'GoBot']);
	console.log('fkdjsj');
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
		
	/*$(".choices li").click(function()
	{
		var alloryour = "your";
		var choice = $(this).text();
		addChoices(choice);
		moreSearchSubmWidth();
		//defineBtnChoices(alloryour);
	});

	$("#ychoice").on('click', 'li', function()
	{
		$(this).remove();
		removeBlocYourChoice();
		moreSearchSubmWidth();
	});
	
	$("#show_menu").click(function()
	{
		var alloryour = "all";
		$("#advanced_search").fadeToggle();
		//initiatChoicesSize();
		//defineBtnChoices(alloryour);
		moreSearchSubmWidth();
		if(advancedmenuinit == 1)
		{
			initiateSizeShownListes();
		}
		var hbtnsearch = $("#bloc_btn_search").outerHeight();
		$(".bloc_bot").height(hbtnsearch);
	});

	$(".choices .btn_bot").click(function()
	{
		var which = $(this).parent(".liste").parent(".choices").attr("id");
		var h = $(".choices li").outerHeight();
		var hscroll = (h) * 4;
		scrollTopChoice(which,hscroll);
	});

	$(".choices .btn_top").click(function()
	{
		var which = $(this).parent(".liste").parent(".choices").attr("id");
		var h = $(".choices li").outerHeight();
		var hscroll = (h) * 4;
		scrollBottomChoice(which,hscroll);
	});*/

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

/*
function addChoices(choice)
{
	var exist = false;
	var nb_li = $("#ychoice li").length;
	if(nb_li > 0)
	{
		$("#ychoice li").each(function()
		{
			if($(this).text() == choice)
			{
				exist = true;
			}
		});
	}
	$("#ychoice").fadeIn();
	if(exist == false)
	{
		$("#ychoice ul").prepend("<li>"+choice+"</li>");
	}
}

function removeBlocYourChoice()
{
	var nb_li = $("#ychoice li").length;
	if(nb_li == 0)
	{
		console.log('test');
		$("#ychoice").css('display','none');
	}
}

function initiatChoicesSize()
{
	var h = $(".choices .menu_type li").outerHeight();
	h = (h) * 4;
	$(".choices ul").height(h);
	
	var wsubm;
	$(".choices").each(function()
	{
		var wchoices = $(this).width();
		wsubm = wsubm + wchoices;
	});
	$("#subm_more").width(wsubm);
}

function initiateSizeShownListes()
{
	var addpadding = 0;
	var globalsize = 0;
	var sizesearch = $("#search").outerWidth();
	var biggestsize = 0;
	
	$(".shown").each(function()
	{
		var elmtwidth = $(this).outerWidth();
		if(elmtwidth > biggestsize)
		{
			biggestsize = elmtwidth;
		}
		globalsize = globalsize + elmtwidth;
	});
	
	if(biggestsize * 3 < sizesearch)
	{
		var addsize = (sizesearch - (biggestsize * 3))/3;
		$(".shown").each(function()
		{
			$(this).width(biggestsize + addsize);
		});
	}
	else if(globalsize < sizesearch)
	{
		var bigger = 0;
		var sizeleft = biggestsize - sizesearch;
		
		$(".shown").each(function()
		{
			if($(this).outerWidth() != biggestsize)
			{
				if($(this).outerWidth() > bigger)
				{
					bigger = $(this).outerWidth();
				}
			}
		});
		
		if((bigger * 2) + biggestsize <= sizesearch)
		{
			var newglobalsize = 0;
			
			$(".shown").each(function()
			{
				if($(this).outerWidth() != biggestsize)
				{
					$(this).width(bigger);
				}
			});
			
			$(".shown").each(function()
			{
				newglobalsize = newglobalsize + $(this).outerWidth();
			});
			
			if(newglobalsize < sizesearch)
			{
				var biggersizeleft = (sizesearch - newglobalsize)/2;
				$(".shown").each(function()
				{
					if($(this).outerWidth() != biggestsize)
					{
						$(this).width(bigger + biggersizeleft);
					}
				});
			}
		}
	}
	advancedmenuinit = 0;
}

function defineBtnChoices(alloryour)
{
	if(alloryour == "all")
	{
		$(".choices").each(function()
		{
			$(".choices .btn_choice .arrow").remove();
		});
		
		$(".choices").each(function()
		{
			var target = $(this).children("ul").children("li");
			var liw  = target.width() + 30;
			var lih = target.height();
			
			$(this).children(".btn_choice").css(
			{
				"width": liw,
				"height": lih
			});
			
			$(this).children(".btn_top").prepend("<span class='arrow_top arrow'></span>");
			$(this).children(".btn_bot").prepend("<span class='arrow_bot arrow'></span>");
		});
	}
	else
	{
		$("#ychoice .btn_choice .arrow").remove();
		var target = $("#ychoice").children("ul").children("li");
		var liw  = target.width() + 30;
		var lih = target.height();
		$("#ychoice").children(".btn_choice").css(
		{
			"width": liw,
			"height": lih
		});
		
		$("#ychoice").children(".btn_top").append("<span class='arrow_top arrow'></span>");
		$("#ychoice").children(".btn_bot").append("<span class='arrow_bot arrow'></span>");
	}
}

function moreSearchSubmWidth()
{
	var submw = 0;
	var isdisplayed = $("#ychoice").css('display');
	if(isdisplayed == "none")
	{
		$(".choices").each(function()
		{
			var wchoices = $(this).width();
			submw = submw + wchoices;
		});
		var ychoicew = $("#ychoice").width();
		$("#bloc_subm_more").width(submw - ychoicew);
	}
	else
	{
		$(".choices").each(function()
		{
			var wchoices = $(this).width();
			submw = submw + wchoices;
			
			$("#bloc_subm_more").width(submw);
		});
	}
}

 var ableScroll = 1;

function scrollTopChoice(which,hscroll)
{
	if(ableScroll == 1)
	{
		ableScroll = 0;
		var ul = $("#"+which).children(".liste").children("ul");
		var scrollPos = ul.scrollTop();
		var newScroll = scrollPos + hscroll;
		ul.animate(
		{
			scrollTop : newScroll
		}, function()
		{
			ableScroll = 1;
		});
	}
}

function scrollBottomChoice(which,hscroll)
{
	if(ableScroll == 1)
	{
		var ul = $("#"+which).children(".liste").children("ul");
		var scrollPos = ul.scrollTop();
		var newScroll = scrollPos - hscroll;
		ul.animate(
		{
			scrollTop : newScroll
		}, function()
		{
			ableScroll = 1;
		});
	}
}
*/