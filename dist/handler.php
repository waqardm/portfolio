<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();
$mailer = $pp->getMailer();
$mailer->setFrom('lawyerscode@waqar.co','Form',false);


$validator = $pp->getValidator();
$validator->fields(['name', 'email','message'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);




$pp->sendEmailTo('lawyerscode@waqar.co'); // ← Your email here

echo $pp->process($_POST);