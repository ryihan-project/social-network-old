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
$adsClass = '';
$emoticonsClass = '';
$featuresClass = '';
$productClass = '';
$marketClass = '';
$pageClass = '';
$earnClass = '';
$proClass = '';
$pointClass = '';
$announce = '';
$cityCountryStateClass = '';
$orderClass = '';
$liveStreamingClass = '';

$activePage = array(
);
	if($pageActive == 'add-new-language-keys'){
	   $langClass = 'class="active activeSetting"';
	}
	if($pageActive == 'manage_about_us'){
	    $pageClass = 'class="active activeSetting"';
	}
	if($pageActive == 'manage_privacy_policies'){
	    $pageClass = 'class="active activeSetting"';
	} 
} 
?>