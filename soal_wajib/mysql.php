<?php

	$sqlMax = mysql_query("SELECT max(Value) as maxValue from Nilai");
	$arrMax = mysql_fetch_array($sqlMax);
	$maxValue = $arrMax['maxValue'];
	$sql= mysql_query("SELECT NM_MHS from mahasiswa inner join nilai on Nilai.NIM = Mahasiswa.NIM
			inner join Mata_Kuliah on Mata_Kuliah.Kode_MK = Nilai.Kode_MataKuliah
			Where Mata_Kuliah.Kode_MK= 'MK303' and Nilai.Value = $maxValue");
?>