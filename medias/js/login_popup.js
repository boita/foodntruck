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
	
	$('#formulaire_inscription').submit(function()
	{
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'http://foodntruck.com/api/inscription.php',
			data: {
				ajax: true,
				mail: $('#mail-connect').val(),
				cgu: $('#cgu').is(':checked'),
				password: $('#password-connect').val(),
				password_confirm: $('#password-connect-confirmation').val()
			},
			
			success: function(data, textStatus, jqXHR) {
			
				if (data.inscription)
				{
					$.ajax({
						type: 'POST',
						dataType: 'json',
						url: 'http://foodntruck.com/api/connexion.php',
						data: {
							ajax: true,
							mail: $('#mail-connect').val(),
							password: $('#password-connect').val(),
						},
						
						success: function(data, textStatus, jqXHR) {

							if (data.connexion)
							{
								window.location.href = window.location.href;
							}
							else
							{
								alert("Le mot de passe et/ou l'adresse mail sont incorrects.");
							}
						},

						error: function(jqXHR, textStatus, errorThrown) {
							alert("Problème de chargement.");
						}
					});
				}
				else
				{
					var erreurs_retour = '<ul>';
					
					$.each(data.erreurs, function(key, value) {
						erreurs_retour += '<li>' + value + '</li>';
					});
					
					erreurs_retour += '</ul>';

					$('#erreur_inscription').html(erreurs_retour);
				}
			},
			
			error: function(jqXHR, textStatus, errorThrown) {
				$('#erreur_inscription').html("Erreur lors de l'inscription.");
			}
		});
		
		return false;
	});
	
	$('#log').submit(function()
	{
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'http://foodntruck.com/api/connexion.php',
			data: {
				ajax: true,
				mail: $('#login').val(),
				password: $('#mdp').val()
			},
			
			success: function(data, textStatus, jqXHR) {
			
				if (data.connexion)
				{
					window.location.href = window.location.href;
				}
				else
				{
					alert("Le mot de passe et/ou l'adresse mail sont incorrects.");
				}
			},
			
			error: function(jqXHR, textStatus, errorThrown) {
				alert("Problème de chargement.");
			}
		});
		
		return false;
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