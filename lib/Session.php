<?
class Session implements Data {
     public $value;
    function __construct(){
        session_start();
    }

    function add($sessid, $sessvalue) {
        $_SESSION[$sessid] = $sessvalue;
        return true;
   }

    function read($sessid) {
        $value = $_SESSION[$sessid];
        return $this->value = $value;
    }

    function delete($sessid) {
        unset($_SESSION[$sessid]);
        return true;
    }

}

?>
