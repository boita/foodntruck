var keep_info_me = $("#about_me").html();

$(document).ready(function() 
{
	sizeLeft();
	positionAddAddresse();
	
	/*$("#gouts li img").mouseover(function()
	{
		if($(this).parent('li').attr('id') != "add_gout")
		{
			$(this).attr('src','img/profil/croix.png');
		}
	});
	
	$("#gouts li img").mouseleave(function()
	{
		if($(this).parent('li').attr('id') != "add_gout")
		{
			$(this).attr('src','img/profil/check.png');
		}
	});*/
	
	$("#add_new_tour").click(function()
	{
		$("#tour-block-new").slideDown("fast");
		$(this).fadeOut("fast");
	});
	
	$("#add_new_taste").click(function()
	{
		$("#pop_up_taste").fadeIn(100);
		$("body").css('overflow-y','hidden');
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
	
	/*$(".suppr_tast").click(function()
	{
		var elmt = $(this).parent('li');
		deleteTastes(elmt);
	});*/
	
	$("#close_pop_taste").click(function()
	{
		$("#pop_up_taste").fadeOut(100);
		$("body").css('overflow-y','visible');
	});
	
	$("#all_tastes label").click(function() 
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
		$("#all_tastes li label").removeClass('selected_taste');
		$("#all_tastes li input").attr('checked',false);
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