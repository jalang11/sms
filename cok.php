<?php
include 'tes.php';
/*
    https://github.com/jalang11/sms
    Made by OMTampanz
*/
$init = new Bom();
//Eksekusi Call/Sms Boomber (Limit 3x/Jam)
$init->type = ""; //Jumlah eksekusi
$init->no = ""; //Nomer Hp tujuan
if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
