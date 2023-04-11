<pre>
    <?php
    include_once("./src/View/User/login.php");
    print_r($_GET);
    print_r($_POST);
    print_r($_SERVER); 
    ?>
</pre>

<?php
define('BASE_URI',str_replace('\\','/',substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
require_once("./Core/Core.php");

$app= new Core\Core();
$app->run();
