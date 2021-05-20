<?php  
$urlarray=explode('/', $_SERVER["REQUEST_URI"]);
$pageActive = end($urlarray); 
$dashClass ='';  
$userClass = '';
$settingClass = '';
$postClass ='';
$reportClass ='';
$langClass ='';
$themeClass = '';
