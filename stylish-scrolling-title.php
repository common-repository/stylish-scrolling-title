<?php
/*
Plugin Name: Stylish Scrolling Title
Plugin URI: https://store.devilhunter.net/wordpress-plugin/stylish-scrolling-title/
Description: Only Plugin activation is enough! No need to use any short-code or to edit settings.
Version: 1.0
Author: Tawhidur Rahman Dear
Author URI: https://www.tawhidurrahmandear.com/
Text Domain: tawhidurrahmandearfour
License: GPLv2 or later 
 
 */
 
 
 // Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}
// 


function tawhidurrahmandearfour()
	{
?> 
	
<SCRIPT>
var Version = navigator.appVersion;
   var Nom = navigator.appName;
   var texte = document.title;
   var width = 75;
   var strLen = texte.length;
   var pos = 1 - width;
 
   Titre();
 
   function Titre(){
   var scroll = "";
   pos++;
   if (pos == strLen) pos = 1 - width;
   if (pos<0){
   for (var i=1; i<=Math.abs(pos); i++) scroll = scroll + " ";
   scroll = scroll + texte.substring(0, width - i + 1);
   for (var i=scroll.length; i<=width; i++) scroll = scroll + " ";}
   else{
   scroll = scroll + texte.substring(pos, pos + width);
   for (var i=scroll.length; i<=width; i++) scroll = scroll + " ";
   }
   if (Nom == 'Microsoft Internet Explorer','Mozilla FireFox','Opera','Google Chrome','Safari') document.title = scroll;
   setTimeout("Titre()",100);}
--></SCRIPT>
	
	<?php
	}

add_action('wp_head', 'tawhidurrahmandearfour');
