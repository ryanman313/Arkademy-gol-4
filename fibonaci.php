<?php
		 	$awal=0;
		 	$akhir=1;
		 	echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.$awal .'&nbsp'.'&nbsp'.",". $akhir;

		 	for ($i=0; $i <3 ; $i++) {
		 		for ($j=1; $j <$i ; $j++) {
						echo "<br>";
					}
		 	 	$hasil=$awal + $akhir;
		 	 	echo '&nbsp'.'&nbsp'.'&nbsp';
		 	 	echo ",". $hasil;
		 	 	$awal=$akhir;
		 	 	$akhir=$hasil;
		 	 } 
		 	 for ($k=0; $k <0; $k++) {
		 		for ($l=1; $l <$k ; $l++) {
					}
		 	 	$hasil=$awal + $akhir;
		 	 	echo ",". $hasil;

		 	 	$awal=$akhir;
		 	 	$akhir=$hasil;
		 	 } 
		 	 for ($m=0; $m <4 ; $m++) {
		 		for ($n=2; $n <$m ; $n++) {
		 			echo "<br>";
					}
		 	 	$hasil=$awal + $akhir;
		 	 	echo '&nbsp'.'&nbsp'.'&nbsp';
		 	 	echo ",". $hasil;

		 	 	$awal=$akhir;
		 	 	$akhir=$hasil;
		 	 }

		 	 for ($o=0; $o <3; $o++) {
		 		for ($p=0; $p <$o ; $p++) {
					}
		 	 	$hasil=$awal + $akhir;
		 	 	echo '&nbsp';
		 	 	echo ",". $hasil;
		 	 	$awal=$akhir;
		 	 	$akhir=$hasil;
		 	 } 

		  ?>