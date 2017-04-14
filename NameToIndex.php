<?php 
include 'class.NameToColumn.php';

$name = $_POST['val'];
$col = new NameToColumn();
echo $col->GetColumnNumber($name);
