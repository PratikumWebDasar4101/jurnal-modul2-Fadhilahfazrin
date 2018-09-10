<?php 
//Tuliskan kode anda di bawah ini
	function rekusif_baris($value){
		rekusif_kolom($value);
		echo "<br>";
		$value--;
		if ($value >= 1) {
			rekusif_baris($value);
		}
	}
	function rekusif_kolom($value){
		echo "*";
		$awal++;
		if ($awal <= $batas) {
			rekusif_kolom($batas, $awal);
		}
	}
?>
