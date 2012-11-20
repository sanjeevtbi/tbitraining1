<html>
<head>
<link rel="stylesheet" href="design.css" type="text/css" />
</head>
<body>
<table id="tab">
<?php 	 
for($i=1;$i<=$limit;$i++) /* For loop for number of rows */ { 
?>		
<tr height="10">
<?php 

			for($j=1;$j<=$limit;$j++) /* For loop for number of columns */ {
			$a=$i*$j; ?>
			<td><?php echo '$a'; }  }?></td> 
			 
		</tr>
		
	</table>
</body>
</html>


