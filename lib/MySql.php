<?
class MySql implements Data {
    protected $value;

    function __construct() {
        mysql_connect(HOST, USER, PASSWORD);
        mysql_select_db(DB);
    }

    function add(){
        $value = 'INSERT INTO '$table' ('row','name') VALUES ('$row','$name')';

    }

    function read(){

    }

    function delete(){

    }

    function __destruct() {
        mysql_close();
    }

}
?>
