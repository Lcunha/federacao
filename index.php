<?php
$app_path = realpath(dirname(__FILE__));
define ('__APP_PATH', $app_path);
$i=1;

//include (__APP_PATH.'/views/languages/english/newEmptyPHP.php');
 
 if ($i==0){
 include __APP_PATH.'/views/languages/english/headerEnglish.php';
 include __APP_PATH.'/views/viewController.php';
 include __APP_PATH.'/views/footer.php';   
 }
 
 else{
  include __APP_PATH.'/views/header.php';
  include __APP_PATH.'/views/viewController.php';
  include __APP_PATH.'/views/footer.php';
 }
?>
