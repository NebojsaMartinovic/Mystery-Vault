
<?php 
//start session
session_start();

//include config
require 'config.php';

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

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}



 ?>