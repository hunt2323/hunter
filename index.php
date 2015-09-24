<?
include 'config.php';
function __autoload($class) {
    include('lib/'.$class.'.php');
}

$value = '';

$sessid = 1;
$sessvalue = 'Session test';

$objSession = new Session;
$value.= $objSession->add($sessid, $sessvalue).'<br>';
$value.= $objSession->read($sessid).'<br>';
$value = $objSession->delete($sessid).'<br>';


include TEMPL;
?>
