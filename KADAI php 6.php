<?php
	$a = 70;
	if($a >= 80){
		echo '優';
	}elseif($a >= 65 && $a < 80){
		echo '良';
	}elseif($a >= 50 && $a < 65){
		echo '可';
	}else{
		echo '不可';
	}
?>