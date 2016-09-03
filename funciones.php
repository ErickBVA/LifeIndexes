<?php
	function calcularGrados($valorMax, $valorACalificar){
		$m = ( 1 - 0 ) / ( $valorMax - 0 );
        $b = ($m*0);
        $y = ($m * $valorACalificar) - ($b);
        return number_format($y,2);
	}
?>