var initadvancedonce = 1

$(function()
{
	//searchPosition();
	positionLogo();
});

$(window).resize(function()
{
	//searchPosition();
	positionLogo();
});

$(document).ready(function()
{
	$('#register').click(function()
	{
		$('#register-container').fadeIn(300);
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
	});
	
	$('#close-register').click(function()
	{
		$('#register-container').fadeOut(300);
		$('#mask').fadeOut(300);
	});
	
	$("#advanced label").click(function()
	{
		var taste = $(this);
		chooseTastes(taste);
	});
	
	$("#show_menu").click(function()
	{
		if($("#advanced").css('display') == 'none')
		{
			$("#advanced").fadeIn();
		}
		else
		{
			$("#advanced").fadeOut();
		}
	});
	
	$("#clear_search").click(function()
	{
		$("#advanced label").removeClass('chosen');
		$("#advanced ul li input").attr('checked',false);
	});
});

function positionLogo()
{
	var wsearch = $("#logo").outerWidth();
	var w = $(window).width();
	
	if(w > 1024)
	{
		var left = (w-wsearch)/2;
		$("#logo").css('left',left);
	}
	else
	{
		var left = (1024-wsearch)/2;
		$("#logo").css('left',left);
	}
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