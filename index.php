<!DOCTYPE html>
<html>
<head>
<meta http-equiv="conten-type" content="text/html" charset="utf8"/>
<title>Excel</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	$('#btn2').click(btn2);		
	});
	function btn2(){
		
		$.ajax({
			url:'IndexToName.php',
			type:'POST',
			data:{
				val1:$('#IndexToName').val()
			}				
			}).done( function(data){
				$('#content').html(data);
			});	
}
</script>
</head>
<body>

<div id="wrap">
    <input type="text" id="IndexToName">
  <input type="button" value="Преобразувай" id="btn2">
  <div id="content">
  
  </div>  
  </div>
  <script type="text/javascript">
$(document).ready(function(){	
	$('#btn').click(btn);		
	});
	function btn(){		
		$.ajax({
			url:'NameToIndex.php',
			type:'POST',
			data:{
				val:$('#NameToColumn').val()
			}				
			}).done( function(data){
				$('#content2').html(data);
			});	
}
</script>
<div id="wrap">
    <input type="text" id="NameToColumn">
  <input type="button" value="Обърни" id="btn">
  <div id="content2">
  
  </div>  
  </div>
</body>
</html>