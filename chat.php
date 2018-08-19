<?php
chat:
echo "[+] $nama >> ";
$omong = trim(fgets(STDIN));
$daftar=array("Aku ingin","Mana gua tau", "Lo kira gw emak lo", "Kalem dong", "Apa urusan lo", "Lo itu titisan","Iya lo mirip");
$umpat=array("ngentod!", "anjeng!", "kontol!",".", "memek!", "kimak!", "jembod!", "jigong!");
$kunci=array_keys($daftar);
$umpat1=array_rand($umpat,2);
$ngacak1=array_rand($daftar,2);
$hai=$daftar[$kunci[0]];
$umpatan=$umpat[$umpat1[1]];
$ngacak=$daftar[$ngacak1[1]];
if($omong == 'hai'){
  sleep(1);
  echo "Hai juga $umpatan\n";
}elseif(strpos($omong,'hai') == TRUE){
  sleep(1);
  echo "Hai juga $umpatan\n";
}elseif(strpos($omong,'siapa') == TRUE){
  sleep(1);
  echo "Yang nanya\n";
}elseif($omong == FALSE){
  sleep(1);
  echo "Kok kosong $umpatan\n";
}elseif(strpos($omong,'kenal') == TRUE){
  sleep(1);
  echo "Oh,, yang kaya $umpatan itu kan\n";
}elseif(strpos($omong,'garox') == TRUE){
  sleep(1);
  echo "Aku ingin kontol yang gede banget\n";
}elseif(strpos($omong,'ericko') == TRUE){
  sleep(1);
  echo "Channel Pendidikan\n";
}else{
  sleep(1);
  echo "$ngacak $umpatan\n";
}
goto chat;
?>
