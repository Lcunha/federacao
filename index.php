<?php
$app_path = realpath(dirname(__FILE__));
define ('__APP_PATH', $app_path);


 include __APP_PATH.'/views/header.php';
 include __APP_PATH.'/views/viewController.php';
 include __APP_PATH.'/views/footer.php';
?>
