<?php
 //Gets the IP address
 $ip = getenv("REMOTE_ADDR") ;
 $ip1 = $_SERVER['HTTP_CLIENT_IP'];
 $ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
 $ip3 = $_SERVER['REMOTE_ADDR'];
 $ip4 = $_SERVER['HTTP_FORWARDED'];
 $ip5 = $_SERVER['HTTP_X_FORWARDED'];
 $ip6 = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $ip7 = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
 $ip8 = $_SERVER['HTTP_FORWARDED_FOR'];
 $ip9 = $_SERVER['HTTP_REFERER'];
 $ip10 = $_SERVER['HTTP_USER_AGENT'];
 $ip11 = $_SERVER['PART1'];
 $ip12 = $_SERVER['PART2'];
 $ip13 = $_SERVER['PART3'];
 $ip14 = $_SERVER['XFFAPPGW'];
 $ip15 = $_SERVER['XFFAPPGW1'];
 $ip16 = $_SERVER['HTTP_HOST'];
 $ip17 = $_SERVER['HTTP_PC_REMOTE_ADDR'];
 $ip18 = $_SERVER['THE_REQUEST'];
 $ip19 = gethostname();
 Echo "REMOTE_ADDR= " . $ip;
 Echo "<br>HTTP_CLIENT_IP= " . $ip1;
 Echo "<br>HTTP_X_FORWARDED_FOR= " . $ip2;
 Echo "<br>REMOTE_ADDR= " . $ip3;
 Echo "<br>HTTP_FORWARDED= " . $ip4;
 Echo "<br>HTTP_X_FORWARDED= " . $ip5;
 Echo "<br>HTTP_CF_CONNECTING_IP= " . $ip6;
 Echo "<br>HTTP_X_CLUSTER_CLIENT_IP= " . $ip7;
 Echo "<br>HTTP_FORWARDED_FOR= " . $ip8;
 Echo "<br>HTTP_REFERER= " . $ip9;
 Echo "<br>HTTP_USER_AGENT= " . $ip10;
 Echo "<br>Part1= " . $ip11;
 Echo "<br>Part2= " . $ip12;
 Echo "<br>Part3= " . $ip13;
 Echo "<br> XFFAPPGW= " . $ip14;
 Echo "<br>XFFAPPGW1= " . $ip15;
 Echo "<br>HTTP_HOST= " . $ip16;
 Echo "<br>HTTP:HTTP_PC_REMOTE_ADDR= " . $ip17;
 Echo "<br>HTTP:THE_REQUEST= " . $ip18;
 Echo "<br>host= " . $ip19;
 ?>