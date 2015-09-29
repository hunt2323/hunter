<?
include 'config.php';
function __autoload($class)
{
  include('lib/'.$class.'.php');
}
$sql_query='';

<<<<<<< HEAD
=======
$row = array('list', 'list2');
$table = array('table');
$namedel= array('name');
$valuedel = ('Vasya');
$valueins = array('Kolya','Ivan');
$oldName = array('Vasylyi');
$newName = array('Alex');
$limit ='';
>>>>>>> hunt2323/master

$objMySql = new MySql;
$sql_query.= $objMySql->selectQuery($row, $table, $limit).'<br>';
$sql_query.= $objMySql->deleteQuery($table, $namedel, $valuedel, $limit).'<br>';
$sql_query.= $objMySql->insertQuery($row, $valueins, $table, $limit).'<br>';
$sql_query.= $objMySql->updateQuery($oldName,$newName,$table, $limit).'<br><hr>';
$objPgSql = new PgSql;
$sql_query.= $objPgSql->selectQuery($row, $table, $limit).'<br>';
$sql_query.= $objPgSql->deleteQuery($table, $namedel, $valuedel, $limit).'<br>';
$sql_query.= $objPgSql->insertQuery($row, $valueins, $table, $limit).'<br>';
$sql_query.= $objPgSql->updateQuery($oldName,$newName,$table, $limit).'<br><hr>';
$objMsSql = new MsSql;
$sql_query.= $objMsSql->selectQuery($row, $table, '').'<br>';
$sql_query.= $objMsSql->deleteQuery($table, $namedel, $valuedel, '').'<br>';
$sql_query.= $objMsSql->insertQuery($row, $valueins, $table, '').'<br>';
$sql_query.= $objMsSql->updateQuery($oldName,$newName,$table, '').'<br><hr>';

<<<<<<< HEAD
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
=======
include VIEW;
>>>>>>> hunt2323/master
?>
