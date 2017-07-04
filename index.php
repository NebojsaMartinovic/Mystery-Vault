
<?php 
//startujemo sesiju koja ce biti inicirana u svakom fajlu 
//start session
session_start();

//ukljucujemo config fajl gde su nam definisane konstante za putanje url kao i konstante za konekciju sa bazom
//include config
require 'config.php';

//ukljucujemo sve klase, kontrolere i modele
require 'classes/Bootstrap.php';
require 'classes/Controller.php';
require 'classes/Model.php';
require 'classes/Messages.php';


require 'controllers/home.php';
require 'controllers/about.php';
require 'controllers/contact.php';
require 'controllers/shares.php';
require 'controllers/users.php';
require 'controllers/admin.php';
require 'controllers/readmore.php';
require 'controllers/search.php';
require 'controllers/category.php';

require 'models/home.php';
require 'models/about.php';
require 'models/contact.php';
require 'models/admin.php';
require 'models/share.php';
require 'models/user.php';
require 'models/readmore.php';
require 'models/search.php';
require 'models/category.php';

//pravimo objekat boostrap sa parametrom $_GET koji cemo dobiti kroz url
$bootstrap = new Bootstrap($_GET);
//pozivamo metodu createController() koja vrsi proveru da li postoji kontroler i metod
$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}



 ?>