<?php
// deconnexion.php : controller

if (isset($_COOKIE['kayak']))
{
	setcookie('kayak', 'null', time() - 3600, '/', 'foodntruck.com');

	if (isset($_GET['url']))
	{
		header('Location: http://foodntruck.com' . $_GET['url']);
	}
	else
	{
		header('Location: http://foodntruck.com/');
	}
}
else
{
	header('Location: http://foodntruck.com/');
}