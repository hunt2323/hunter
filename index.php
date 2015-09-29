<?
include 'config.php';
function __autoload($class) {
    include('lib/'.$class.'.php');
}


$sessid = 1;
$sessvalue = 'Session test';

$objSession = new Session;
$value = '';
$value1 = '';
$value1 = $objSession->add($sessid, $sessvalue).'<br>';
$value = $objSession->read($sessid).'<br>';
$value1 = $objSession->delete($sessid).'<br>';
if($value1 == true){
    $sess = "Session added!";
}
else($value1 == false){
    $sess = "Session delete!";
}


include TEMPL;
?>
