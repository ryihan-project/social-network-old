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
	"dashboard",
	"site-settings",
	"live_streamings",
	"live_streamings_features",
	"amazon-s3"
);
 
if(in_array($pageActive, $activePage)) { 
    if($pageActive == 'manage_new_orders'){
	    $orderClass = 'class="active activeSetting"';
	}
	if($pageActive == 'live_streamings'){
	    $liveStreamingClass = 'class="active activeSetting"';
	}
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