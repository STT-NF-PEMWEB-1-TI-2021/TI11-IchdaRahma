<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['ichda', 'ichda', 'rahma', 'rhma'];
	array_unshift($name, 'icha', 'ich');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>