<?php

$text = $_GET['b1-b'];

function verifyBrackets($s) {
	#simple counting
	$open_t1 = substr_count($s, '(');
	$open_t2 = substr_count($s, '{');
	$open_t3 = substr_count($s, '[');
	$close_t1 = substr_count($s, ')');
	$close_t2 = substr_count($s, '}');
	$close_t3 = substr_count($s, ']');
	
	$brackets_ok=true;
	
	if($open_t1!=$close_t1 || $open_t2!=$close_t2 || $open_t3!=$close_t3 )
		$brackets_ok=false;

	#special case, check position for first ocurrencies (dont need to be recursive)
	if($open_t1 && $close_t1) {
		$pt_o = strpos($s, '(');
		$pt_c = strpos($s, ')');
		if($pt_c<$pt_o)
			$brackets_ok=false;
	}

	if($open_t2 && $close_t2) {
		$pt_o = strpos($s, '{');
		$pt_c = strpos($s, '}');
		if($pt_c<$pt_o)
			$brackets_ok=false;
	}

	if($open_t3 && $close_t3) {
		$pt_o = strpos($s, '[');
		$pt_c = strpos($s, ']');
		if($pt_c<$pt_o)
			$brackets_ok=false;
	}
	return $brackets_ok;
}
$brackets_ok=verifyBrackets($text);
if($brackets_ok)
	echo " valid";
else
	echo " not valid";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bravi Brackets</title>
</head>
<body>
<h1>Brackets parser</h1>
<p>Write strings with brackets above to check out consistency</p>
<form method="GET" name="b1" action="index.php">
	<input type="text" name="b1-b">
	<input type="submit" name="b1-s" value="verify">
</form>
<p>Author: Francisco Matelli Matulovic</p>
<p>Released under GNU GPLv3</p>
</body>
</html>
