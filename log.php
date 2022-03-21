<?php

$dosya = fopen("sadeceolulergorur.txt","a+"); //kanka burayi .php yapsan daha iyi olur sadece sen görürsün

$IP_Adresi = $_SERVER["REMOTE_ADDR"]; //Giren kisinin ip adresini verir
$Tarayici = $_SERVER["HTTP_USER_AGENT"]; //Giren kisinin tarayıcısını verir
$Tarih = time();

$kaydet = $IP_Adresi."\t".$Tarayici."\t".$Tarih."\n";

fwrite($dosya,$kaydet);
while ($oku = fgets($dosya)) {
  echo $oku."<br />";

  //calmalanserefsiz
}


?>
