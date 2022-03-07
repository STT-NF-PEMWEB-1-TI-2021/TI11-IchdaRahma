<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ichda', 'ichda', 'rahma', 'rhma'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>