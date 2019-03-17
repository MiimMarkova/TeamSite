<?php
function HTML_START() {
	return '
		<!DOCTYPE html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<title>TeamViewer</title>
			<link rel="stylesheet" href="./css/style.css">
		  </head>
		  <body>
	';
}
function MAIN_HEADER() {
	return '
		<header>  
		  <div class="page_title">TEAM VIEWER</div>
		  <nav id="head-nav">
			<ul>
			  <li><a class="head-link" href=""></a>ABOUT</li>
			  <li><a class="head-link" href=""></a>SKINCARE</li>
			  <li><a class="head-link" href="">FIND</a></li>
			  <li><a class="head-link" href="">Science</a></li>
			  <li><a class="head-link" href="">PRESS</a></li>
			  <li><a class="head-link" href="">JOIN</a></li>
			  <li><a class="head-link" href="">LOGIN</a></li>
			</ul>
		  </nav>
		</header>
	';
}
function  MAIN_FOOTER() {
	return "
		<footer>
		  <nav id="foot-nav">
			<ul>
			  <li>
				<a class="foot-link" href="">CONTACT</a> / 
				<a class="foot-link" href="">EMAIL</a>
			  </li>
			  <li>
				<a class="foot-link" href="">VIEW COMPANY POLICY</a>
			  </li>
			  <li>
				<a class="foot-link" href="">FACEBOOK</a> / 
				<a class="foot-link" href="">YOUTUBE</a>
			  </li>
			</ul>
		  </nav>
		  <div id="foot-sign">
			<h3 id="foot-logo">VERSO</h3>
			<h3 id="foot-sloagan">SKINCARE</h3>
			<h3 id="foot-city">STOCLHOLM</h3>
		  </div>
		</footer>
	 
	";
}


function HTML_END() {
	return ' 
		</body>
		</html>
	';
}
?>