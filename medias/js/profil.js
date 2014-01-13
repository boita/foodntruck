var keep_info_me = $("#about_me").html();

$(document).ready(function() 
{
	sizeLeft();
	positionAddAddresse();
	countTastes();
	//positionTastes();

	$("#add_new_address").click(function()
	{
		$("#bloc_add_address").slideDown("fast");
		$(this).fadeOut("fast");
	});
	
	$("#add_new_taste").click(function()
	{
		$("#pop_up_taste").fadeIn(100);
	});
	
	$("#change_info").click(function()
	{
		$("#bloc_about_me").slideUp('fast');
		$("#change_info_me").fadeIn('fast');
		$("#close_change_me").show();
	});
	
	$("#close_change_me").click(function()
	{
		$("#change_info_me").fadeOut('fast');
		$("#bloc_about_me").slideDown('fast');
		$("#close_change_me").hide();
	});

	$(".recap").click(function()
	{
		if($("#recap").length > 0)
		{
			$("#recap").remove();
		}
		var bloc_parent = $(this).parent(".bloc_commande");
		var which = bloc_parent.attr('class').split(' ')[1];
		if(which == "com_left")
		{
			which = bloc_parent.next('.bloc_commande');
		}
		else
		{
			which = bloc_parent;
		}
		
		var content_recap = $("#recap_model").html();
		which.after('<div id="recap" style="clear:both; display:none;">'+content_recap+'</div>');
		$("#recap").slideDown('fast');
	});
	
	$(".suppr").click(function()
	{
		$(this).parent('.manage_adresse').parent('.container_adresse').parent('.bloc_adresse').remove();
		countAddresse();
		positionAddAddresse();
	});
	
	$("#close_pop_taste").click(function()
	{
		$("#pop_up_taste").fadeOut(100);
	});
	
	$("#all_tastes_pop label").click(function() 
	{
		if($(this).hasClass('selected_taste'))
		{
			$(this).removeClass('selected_taste');
		}
		else
		{
			$(this).addClass('selected_taste');
		}
	});
	
	$("#clear_tastes").click(function()
	{
		$("#all_tastes_pop li label").removeClass('selected_taste');
		$("#all_tastes_pop li input").attr('checked',false);
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

function sizeLeft()
{
	var hright = $("#bloc_right").outerHeight();
	$("#bloc_left").height(hright);
}

function countAddresse()
{
	var nb_adresses = $("#all_addresses .bloc_adresse").length;
	if(nb_adresses < 1)
	{
		$("#all_addresses").append('<p class="advice">You haven\'t got any favourites addresses yet. Add some with the \'+\' on your right.</p>');
	}
}

function countTastes()
{
	var nb_tastes = $("#all_tastes .suppr_tast").length;
	if(nb_tastes < 1)
	{
		$("#all_tastes").prepend('<p class="advice">You haven\'t tell us your tastes yet. Add some with the \'+\' on your right.</p>');
	}
}

function positionAddAddresse()
{
	var h = $("#container_adresse").height();
	var htitle = $("#adresses .titre_bloc").outerHeight();
	var top = (h/2) + htitle;
	
	$("#add_new_address").animate(
	{
		'top': top
	},100);
}