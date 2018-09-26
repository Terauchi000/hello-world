<?php
	$names = array('ディープインパクト','トウカイテイオー','スペシャルウィーク','スーパークリーク','メジロマックイーン','ダイユウサク','オグリキャップ','ウォッカ','ダイワスカーレット');
    
     echo "出走馬は".count($names)."頭です。<br />";
     echo "<br />";
     	 
	$horse[] = array(
		'name' => 'ディープインパクト',
		'father' => 'サンデーサイレンス'
	    );
	
	$horse[] = array(
		'name' => 'トウカイテイオー',
		'father' => 'シンボリルドルフ'
	    );
	
	$horse[] = array(
		'name' => 'スペシャルウィーク',
		'father' => 'サンデーサイレンス'
	    );
	
	$horse[] = array(
		'name' => 'スーパークリーク',
		'father' => 'ノーアテンション'
	    );
	
	$horse[] = array(
		'name' => 'メジロマックイーン',
		'father' => 'メジロティターン'
	    );
	
	$horse[] = array(
		'name' => 'ダイユウサク',
		'father' => 'ノノアルコ'
	    );
	
	$horse[] = array(
		'name' => 'オグリキャップ',
		'father' => 'ダンシングキャップ'
	    );
	
	$horse[] = array(
		'name' => 'ウォッカ',
		'father' => 'タニノギムレット'
	    );
	
	$horse[] = array(
		'name' => 'ダイワスカーレット',
		'father' => 'アグネスタキオン'
	    );
	//var_dump($horse);
	
	
	foreach($horse as $value){
	echo "&emsp;"."&emsp;".$value['name'].'<br>';
	echo "&emsp;"."&emsp;"."&emsp;"."&emsp;".'父:'.$value['father'].'<br>';
	}
?>