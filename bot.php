<?php
#By amin.jr
error_reporting(0);

//warna
$h = "\33[32;1m";
$b = "\33[0;36m";
$m = "\33[31;1m";
$p = "\e[1;37m";
$dark="\033[1;30m";
$k = "\33[1;33m";
$c = "\e[1;36m";
$u = "\e[1;35m";
$abu = "\e[1;30m";
$end = "\033[0m";
$bmerah = "\033[101m";
$bputih = "\033[107m";

//animasi
function animasi($str){ $arr = str_split($str); 
 foreach ($arr as $az){ echo $az; 
 usleep(5000); }} 
 
//curl
function curl($url,$httpheader=0,$post=0){ 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    if($httpheader){
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    if($post){
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
    $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    curl_close($ch);
    return array($header, $body)[1];} }

//url call
function call($nomor){
  $url="https://id.jagreward.com/member/verify-mobile/$nomor";
  return curl($url); }
 
 system("clear"); //call
 //banner
 animasi($m."••••••••••••••••••••••••••••••••••••••••••••••••••••\n");
 animasi($h."======= ╔═╗{$u}┌─┐┬  ┬   =======|{$c}≽ {$p}Creator: {$p}penjahatsolder\n");
 animasi($h."======= ║  {$u}├─┤│  │   =======|{$c}≽ {$p}Youtube: tutur14l\n");
 animasi($h."======= ╚═╝{$u}┴ ┴┴─┘┴─┘ =======|{$c}≽ {$p}Version: {$k}v0.15\n\n");
  animasi($m."••••••••••••••••••••••••••••••••••••••••••••••••••••\n");
 animasi($p." Example: {$k}823xxxxxxxx\n");
 animasi($m." » {$p}masukan nomor: $h"); 
 $nomor = trim(fgets(STDIN)); //input nomor
 $call = call($nomor); //langsung call
 $hasil = json_decode($call)->result; //responnya

  if($hasil=="1"){
  animasi(" {$k}Messages: {$h}success, {$p}call ke nomor {$c}{$nomor}\n");
  }
  else{
  animasi(" {$k}Messages: {$m}Terjadi kesalahan !\n");
  }