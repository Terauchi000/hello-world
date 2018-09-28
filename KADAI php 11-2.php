<?php
	$names = array('ディープインパクト','トウカイテイオー','スペシャルウィーク','スーパークリーク','メジロマックイーン','ダイユウサク','オグリキャップ','ウォッカ','ダイワスカーレット');
    
     echo "出走馬は".count($names)."頭です。<br />";
     echo "<br />";
     
     $horse = array(
     	 'ディープインパクト'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'サンデーサイレンス',
     	  'mother' => 'ウインドインハーヘア'),
     	 
     	 'トウカイテイオー'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'シンボリルドルフ',
     	  'mother' => 'トウカイナチュラル'),
     	     
     	 'スペシャルウィーク'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'サンデーサイレンス',
     	  'mother' => 'キャンペーンガール'),
     	     
     	 'スーパークリーク'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'ノーアテンション',
     	  'mother' => 'ナイスデイ'),
     	     
     	 'メジロマックイーン'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'メジロティターン',
     	  'mother' => 'メジロオーロラ'),
     	     
     	 'ダイユウサク'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'ノノアルコ',
     	  'mother' => 'クニノキヨコ'),
     	     
     	 'オグリキャップ'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'ダンシングキャップ',
     	  'mother' => 'ホワイトナルビー'),
     	     
     	 'ウォッカ'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'タニノギムレット',
     	  'mother' => 'タニノシスター'),
     	     
     	 'ダイワスカーレット'=> array(
     	  'sex' => '牡馬',
     	  'father' => 'アグネスタキオン',
     	  'mother' => 'スカーレットブーケ'),
     );
     
     foreach($horse as $key => $value){
     echo "&emsp;"."&emsp;".$key.'<br>';
     echo "&emsp;"."&emsp;"."&emsp;"."&emsp;".$value['sex'].'<br>';
     echo "&emsp;"."&emsp;"."&emsp;"."&emsp;".'父:'.$value['father'].'<br>';
     echo "&emsp;"."&emsp;"."&emsp;"."&emsp;".'母:'.$value['mother'].'<br>';
     }
?>