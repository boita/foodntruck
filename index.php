<?php
header('Content-type: text/html; charset=utf-8');

require_once 'includes/mysql.connexion.php';

function clean_page($buffer)
{
	$temp = str_replace(array("\t", "\r"), "", $buffer);
	$temp = preg_replace('/\s\s+/', "\n", $temp);
	
	return $temp;
}

ob_start("clean_page");

class init
{
	protected $_db;
	
	public function __construct($db)
	{
		$this->_db = $db;
	}
}

if (isset($_GET['page']))
	$GLOBAL_URL['short'] = $_GET['page'];
else
	$GLOBAL_URL['short'] = 'index';
	
if (!isset($GLOBAL_URL['short']) || !is_file('models/' . $GLOBAL_URL['short'] . '.php'))
{
	$GLOBAL_URL['short'] = 'erreur';
}

if ($GLOBAL_URL['short'] == 'index')
{
	$ajout_css = array(
		'home.css',
		'js/plugins/leaflet/leaflet.css'
	);

	$ajout_js = array(
		'home.js',
		'js_map.js',
		'login_popup.js',
		'plugins/leaflet/leaflet.js'
	);

} elseif ($GLOBAL_URL['short'] == 'profil')
{
	$ajout_css = array(
		'profil.css'
	);

	$ajout_js = array(
		'login_popup.js',
		'profil.js'
	);
	
} elseif ($GLOBAL_URL['short'] == 'foodtruck')
{
	$ajout_css = array(
		'page_truck.css',
		'plugins/leaflet/leaflet.css'
	);

	$ajout_js = array(
		'plugins/jquery-ui-1-10-3.js',
		'js_pft.js',
		'plugins/rating.js',
		'js_map_ft.js',
		'login_popup.js',
		'plugins/leaflet/leaflet.js'
	);
	
} elseif ($GLOBAL_URL['short'] == 'truck_profile')
{
	$ajout_css = array(
		'page_truck.css',
		'profil.css',
		'profil_truck.css'
	);

	$ajout_js = array(
		'profil.js',
		'login_popup.js'
	);
	
} elseif ($GLOBAL_URL['short'] == 'contact')
{
	$ajout_js = array(
		'login_popup.js'
	);	
}

require_once 'models/' . $GLOBAL_URL['short'] . '.php';

require_once 'controllers/' . $GLOBAL_URL['short'] . '.php';

if ($GLOBAL_URL['short'] !== 'inscription') require_once dirname(__FILE__) . '/includes/header.php';

if ($GLOBAL_URL['short'] !== 'inscription') require_once dirname(__FILE__) . '/includes/menu.php';

require_once 'views/' . $GLOBAL_URL['short'] . '.php';

if ($GLOBAL_URL['short'] !== 'inscription') require_once dirname(__FILE__) . '/includes/footer.php';

ob_end_flush();