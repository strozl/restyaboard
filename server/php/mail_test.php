<?php
require_once 'config.inc.php';
require_once 'libs/vendors/finediff.php';
require_once 'libs/core.php';
require_once 'libs/vendors/OAuth2/Autoloader.php';

$emailFindReplace['##NAME##'] = "STAS";
                $emailFindReplace['##ACTIVATION_URL##'] = 'http://replaceME';
                sendMail('activation', $emailFindReplace, 'stas.strozak@xlab.si');
?>
