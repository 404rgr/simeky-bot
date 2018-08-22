<?php
chat:
echo "[+] $nama >> ";
$omong = trim(fgets(STDIN));
$daftar=array("Aku ingin","Mana gua tau", "Lo kira gw emak lo", "Kalem dong", "Apa urusan lo", "Lo itu titisan","Iya lo mirip");
$umpat=array("ngentod!", "anjeng!", "kontol!",".", "memek!", "kimak!", "jembod!", "jigong!", "njeng!");
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
}elseif(strpos($omong,'sih') == TRUE){
  sleep(1);
  echo "Emang! Mau apa lo $umpatan\n";
}elseif(strpos($omong,'asu') == TRUE){
  sleep(1);
  echo "Mukalo cem asu\n";
}elseif(strpos($omong,'kalem') == TRUE){
  sleep(1);
  echo "Lo yang kalem $umpatan\n";
}elseif(strpos($omong,'bot') == TRUE){
  sleep(1);
  echo "Bot Bot Jembot\n";
}elseif(strpos($omong,'makan') == TRUE){
  sleep(1);
  echo "Mau makan kontol?\n";
}elseif(strpos($omong,'sono') == TRUE){
  sleep(1);
  echo "Lo aja $umpatan\n";
}elseif(strpos($omong,'wkwkwk') == TRUE){
  sleep(1);
  echo "Ketawa lu $umpatan\n";
}elseif(strpos($omong,'bacod') == TRUE){
  sleep(1);
  echo "Bacod Ngentod!\n";
}elseif(strpos($omong,'bacot') == TRUE){
  sleep(1);
  echo "Cot Cot Babacoooootttt\n";
}elseif(strpos($omong,'meky') == TRUE){
  sleep(1);
  echo "Apa lo panggil panggil!\n";
}elseif(strpos($omong,'dih') == TRUE){
  sleep(1);
  echo "Lo tau gak?\n";
}elseif(strpos($omong,'apa') == TRUE){
  sleep(1);
  echo "Tanya mak lo sono!\n";
}elseif(strpos($omong,'kasar') == TRUE){
  sleep(1);
  echo "Suka suka gw lah $umpatan\n";
}elseif(strpos($omong,'njir') == TRUE){
  sleep(1);
  echo "$umpatan\n";
}elseif(strpos($omong,'jangan') == TRUE){
  sleep(1);
  echo "Emang lo siapa $umpatan\n";
}elseif(strpos($omong,'yang nanya') == TRUE){
  sleep(1);
  echo "Gw lah $umpatan!\n";
}elseif(strpos($omong,'asw') == TRUE){
  sleep(1);
  echo "Asw asw ndasmu!\n";
}else{
  sleep(1);
  echo "$ngacak $umpatan\n";
}
goto chat;
?>
