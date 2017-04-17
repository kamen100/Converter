<?PHP

include 'class.NameToColumn.php';

$name = $_POST['val1'];
$col = new NameToColumn();

echo 'Въведения индекс на колона отговаря на колона:    ' , $col->GetColumnName($name) ;
?>