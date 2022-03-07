<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ichda', 'ichda', 'ichda', 'ichda'];
	array_push($name, 'icha');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>