<?php 
include 'class.NameToColumn.php';

$name = $_POST['val'];
$col = new NameToColumn();
$col->GetColumnNumber($name);
//echo ' Въведеното име на колона отговаря на индекс:    ', $col->GetColumnNumber($name);
if($name>"0") {
	echo ' Въведеното име на колона отговаря на индекс:' ,   $col->GetColumnNumber($name);
}
else echo 'Въведете буква/име на колона';
?>