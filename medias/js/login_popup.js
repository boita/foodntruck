/****************POPUP REGISTER*******************/

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
});

$(window).resize(function()
{
	positionRegister();
});

$(function()
{
	positionRegister();
});

function positionRegister()
{
	var w = $(window).width();
	var wregister = $("#register-container").outerWidth();
	
	if(w > 1024)
	{
		var left = (w-wregister)/2;
		$("#register-container").css('left',left);
	}
	else
	{
		var left = (1024-wregister)/2;
		$("#register-container").css('left',left);
	}
}