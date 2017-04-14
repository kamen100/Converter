<?PHP

include 'class.NameToColumn.php';

$name = $_POST['val1'];
$col = new NameToColumn();
echo $col->GetColumnName($name);
