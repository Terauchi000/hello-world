<?php
	$names = array('ディープインパクト','トウカイテイオー','スペシャルウィーク','スーパークリーク','メジロマックイーン','ダイユウサク','オグリキャップ','ウォッカ','ダイワスカーレット');
    
     echo "出走馬は".count($names)."頭です。<br />";
     echo "<br />";
     
     foreach($names as $value){
    echo $value."</br>";
    } 
?>