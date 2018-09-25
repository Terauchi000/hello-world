<?php
	$score = 60;
    $message = '';
    
	switch($score){
	case $score >= 90: 
	  $message = 'パーフェクトです。';
	 break;
	 
	case $score >= 70 && $score < 90:
	  $message = '素晴らしい';
	 break;
	 
	case $score >= 50 && $score < 70:
	  $message = '合格です。';
	 break;
	 
	 default:
	  $message = '頑張りましょう！';
	 break;
	 }
echo "結果は $score 点です。$message";
?>