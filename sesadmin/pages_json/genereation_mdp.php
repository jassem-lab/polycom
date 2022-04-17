<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
	include('../connexion/cn.php');  
} 
    $MDP = ""; 
	
    $chaine ="mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
    srand((double)microtime()*1000000);
    $pass = '';
    for($i=0; $i<10; $i++){
        $MDP .= $chaine[rand()%strlen($chaine)];
     }
	
	$json = '{"MDP":"'.$MDP.'"}';
	
	json_encode($json);
	echo $json;
	

?>