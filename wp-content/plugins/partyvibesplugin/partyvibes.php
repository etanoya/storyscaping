<?php
/* 
* PLugin Name: Partyvibes PLugin
* Plugin URI: http://localhost/wordpressseo/
* Description: This is a newsletter plugin for the company X. The plugin is based on html, css, js and php?
* Version: 0.5
* Author: Marko, Oliver, Emma, Amanda
* Author URI: http://localhost/wordpressseo/
* License: GPL2
*/

function newsletter_form()
{
	$content = '';
	$content .= '<div class="login-form">';
	
	$content .= '<div class="popupCloseButton">X</div>';
	$content .= '<section>';
	$content .= '<h3 id="Welcome">Welcome to</h3>';
	$content .= '<img src="  '. plugins_url("partyvibesplugin/img/logo.png") .'  " alt="Cheers Logo">';
	$content .='<h5 id="tilmeld">Sign up for weekly party vibes</h5>';
	$content .='</section>';
	$content .='<section class="form">';
	$content .='<form action="#" id="myForm">';
	$content .='<div class="input">';
	$content .='<input type="email" name="email" id="email" placeholder="Enter your name here..." required> <i class="fas fa-envelope"></i>';
	$content .='</div>';
	
	$content .='<div>';
	$content .='<input type="submit" value="LET THE GAME BEING!" name="submitBtn" id="submitBtn2">';
	$content .='</div>';
	
	$content .='<div>';
	$content .='<input type="button" value="No I\'m Boring" name="submitBtn" id="submitBtn">';
	$content .='</div>';
	
	$content .='</form>';
	$content .='</section>';
	$content .='</div>';
	return $content;
	
}


function register_styles_and_scripts_for_plugin()
{
	wp_enqueue_style('fontAwesomeCDN',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
	wp_enqueue_style('CustomFontMontSerrat','https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
	wp_enqueue_style('CustomStylesheet', plugins_url ('partyvibesplugin/css/style.css'));
	
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js', array(), null, true);
	wp_enqueue_script('CustomScript', plugins_url ('partyvibesplugin/js/script.js'), array('jquery'), null, true);
	
}

add_shortcode('show_partyvibesplugin', 'newsletter_form');
add_action('wp_enqueue_scripts', 'register_styles_and_scripts_for_plugin');