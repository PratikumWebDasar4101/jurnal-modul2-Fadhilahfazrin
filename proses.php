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
	function deret_ganjil_genap($value){
		$arr_genap = array();
		$arr_ganjil = array();
		for ($i=1; $i <= value; $i++) { 
			if ($i%2 == 0) 
				array_push($arr_genap, $i);
			else 
				array_push($arr_ganjil, $i);
		}
		echo "Genap&emps; = ";
		for ($i=0; $i < count($arr_genap) ; $i++) { 
			echo $arr_genap[$i];
			if ($i != count($arr_genap)-1) {
				echo ", ";
			}
		}
	}
?>
