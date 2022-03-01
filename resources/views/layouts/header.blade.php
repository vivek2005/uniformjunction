<!doctype html>
<html>
<head>
<meta charset="utf-8">
@stack('title')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">	
<link href = "{{asset('css/style.css')}}" rel = "stylesheet">
<link href = "{{asset('css/bootstrap.min.css')}}" rel = "stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>
	<header class="new_detail_header">
    <!-- <div class="dropdown">
	  <button onclick="myFunction()" class="dropbtn nsd_new"></button>
	  <div id="myDropdown" class="dropdown-content menu_nsw">		
		  <div class="container head_main">			
			<div class="logo_main"><img src="images/dailyearn-logo.svg" style="width: 150px;" alt=""></div>		
			<div class="menu_wrapper">			
					<nav class="navbar navbar-expand-lg navbar-light bg-light menu_wrapp_inside">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <img src="{{asset('images/ionic-ios-menu.svg')}}" alt=""></button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto menuNavigation">
      <li class="nav-item">
        <a class="nav-link" href="https://www.dailylearn.in/">Home</a>
      </li>
		
		<li class="nav-item">
        <a class="nav-link" href="https://www.dailylearn.in/">Buy Courses</a>
      </li>
		<li class="nav-item">
        <a class="nav-link" href="https://www.dailylearn.in/">Packages</a>
      </li>
		
		<li class="nav-item drop_nav">
        <a class="nav-link" href="#">Classes <img src="images/down_black.svg" alt=""/></a>
			
		<div class="drop_down_nsw">			
			<ul>
				<li><a href="">Class 9</a></li>
				<li><a href="">Class 10</a></li>
				<li><a href="">Class 11</a></li>			
				<li><a href="">Class 12</a></li>			
			</ul>			
			</div>				
      </li>
		
		<li class="nav-item ">
        <a class="nav-link" href="https://www.dailylearn.in/">Partners</a>
      </li>
		
		<li class="nav-item active">
        <a class="nav-link" href="https://www.dailylearn.in/">About us</a>
      </li>     
    </ul>
  </div>
</nav>				
					<div class="search_ara"><img src="{{asset('images/search_ico.svg')}}" alt=""></div>			
					<div class="jon_buttoon_wrapp">
					</div>
			</div>
		</div>
	  </div>
	</div> -->

	<script>
	/* When the user clicks on the button, 
	toggle between hiding and showing the dropdown content */
	function myFunction() {
	  document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) {
	  if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
		  var openDropdown = dropdowns[i];
		  if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}
	</script>
	</header>
	<div class="video_audio_wrapp">
	<div class="container inside_vidAudo_wrapp">		
		<div class="left_menu_ads col-lg-2 col-md-2 col-box">		
		@if ($data['leftNav'] == 1 )
		<ul>
					<li
					@if ($data['currLi'] == 'video' )
					class ='active'
					@endif
					>
						<a href="/videos"><span class="ico_sv">
						<svg xmlns="http://www.w3.org/2000/svg" width="19.828" height="19.828" viewBox="0 0 19.828 19.828">
						<g id="Group_2408" data-name="Group 2408" transform="translate(-9591.5 8761)">
							<g id="noun_Class_2509734" transform="translate(9591.5 -8761)">
							<ellipse id="Ellipse_374" data-name="Ellipse 374" cx="1.396" cy="1.588" rx="1.396" ry="1.588" transform="translate(15.437 12.778)"/>
							<path id="Path_2175" data-name="Path 2175" d="M70.8,78.886a2.868,2.868,0,0,0-3,2.72c0,1.107,5.992,1.107,5.992,0A2.868,2.868,0,0,0,70.8,78.886Z" transform="translate(-53.967 -62.608)"/>
							<ellipse id="Ellipse_375" data-name="Ellipse 375" cx="1.396" cy="1.588" rx="1.396" ry="1.588" transform="translate(8.518 12.778)"/>
							<path id="Path_2176" data-name="Path 2176" d="M36.4,81.606c0,1.107,5.992,1.107,5.992,0a3.01,3.01,0,0,0-5.992,0Z" transform="translate(-29.483 -62.608)"/>
							<ellipse id="Ellipse_376" data-name="Ellipse 376" cx="1.396" cy="1.588" rx="1.396" ry="1.588" transform="translate(1.6 12.778)"/>
							<path id="Path_2177" data-name="Path 2177" d="M5,81.606c0,1.107,5.992,1.107,5.992,0a2.868,2.868,0,0,0-3-2.72A2.868,2.868,0,0,0,5,81.606Z" transform="translate(-5 -62.608)"/>
							<path id="Path_2178" data-name="Path 2178" d="M24.608,5H13.388a.22.22,0,0,0-.22.22v7.207c.284.014.592.038.881.076V5.881h9.9v9.253h-9.9V14.4c.129-.018.248-.037.346-.054a.425.425,0,0,0,.359-.39L17.7,11.848a.331.331,0,1,0-.386-.537l-2.979,2.136a11,11,0,0,0-2.031-.159,7.583,7.583,0,0,0-1.216-2.618,3.684,3.684,0,0,0-1.9-.755,5.1,5.1,0,0,0-1.388,0,3.681,3.681,0,0,0-1.9.755c-.885.9-.921,3.552-.9,5.346H6.089c.176-1.2.337-1.651.459-2.921L6.7,14.577q.009.159.005.318l-.026,1.121h3.626l-.026-1.121q0-.159.005-.318l.156-1.482a4.437,4.437,0,0,0,1.437,1.39,4.069,4.069,0,0,0,1.288.018V15.8a.22.22,0,0,0,.22.22h11.22a.22.22,0,0,0,.22-.22V5.22A.22.22,0,0,0,24.608,5Z" transform="translate(-5 -5)"/>
							<ellipse id="Ellipse_377" data-name="Ellipse 377" cx="1.459" cy="1.59" rx="1.459" ry="1.59" transform="translate(2.036 1.028)"/>
							</g>
						</g>
						</svg>
						</span>Video Lessons</a></li>
					<li
					@if ($data['currLi'] == 'study' )
					class ='active'
					@endif					
					><a href="/studyNotes"><span class="ico_sv"><svg xmlns="http://www.w3.org/2000/svg" width="23.131" height="24.226" viewBox="0 0 23.131 24.226">
  <g id="Expanded" transform="translate(-0.9 -1.873)">
    <path id="Path_223" data-name="Path 223" d="M12.466,27.459a.519.519,0,0,1-.224-.051L1.3,22.2a.521.521,0,0,1-.3-.471V5.57A.522.522,0,0,1,1.745,5.1l10.72,5.1L23.186,5.1a.521.521,0,0,1,.745.471V21.726a.521.521,0,0,1-.3.471L12.69,27.408A.519.519,0,0,1,12.466,27.459ZM2.042,21.4,12.466,26.36,22.889,21.4V6.4l-10.2,4.857a.522.522,0,0,1-.448,0L2.042,6.4Z" transform="translate(0 -1.46)" fill="#1a1717" stroke="#1a1717" stroke-width="0.2"/>
    <path id="Path_224" data-name="Path 224" d="M14.379,7.317,5.294,2.991a.521.521,0,1,1,.448-.942l8.637,4.114,8.637-4.114a.521.521,0,0,1,.448.942Z" transform="translate(-1.913)" fill="#1a1717" stroke="#1a1717" stroke-width="0.2"/>
    <path id="Path_225" data-name="Path 225" d="M22,16.049h1.042V32.205H22Z" transform="translate(-10.055 -6.728)" fill="#1a1717" stroke="#1a1717" stroke-width="0.2"/>
  </g>
</svg>

</span>Study Notes</a></li>
<li
@if ($data['currLi'] == 'tests' )
class ='active'
@endif
><a href="/tests"><span class="ico_sv"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
  <g id="Group_2411" data-name="Group 2411" transform="translate(-46 -292)">
    <g id="Group_2410" data-name="Group 2410" transform="translate(46 292)">
      <g id="Rectangle_2375" data-name="Rectangle 2375" fill="none" stroke="#1a1717" stroke-width="1">
        <rect width="21" height="21" rx="3" stroke="none"/>
        <rect x="0.5" y="0.5" width="20" height="20" rx="2.5" fill="none"/>
      </g>
      <g id="Group_2409" data-name="Group 2409" transform="translate(3.992 6.334)">
        <line id="Line_101" data-name="Line 101" x2="13.252" transform="translate(0 0)" fill="none" stroke="#1a1717" stroke-linecap="round" stroke-width="2"/>
        <line id="Line_102" data-name="Line 102" x2="9.029" transform="translate(0 4.38)" fill="none" stroke="#1a1717" stroke-linecap="round" stroke-width="2"/>
        <line id="Line_103" data-name="Line 103" x1="5.51" transform="translate(0 8.76)" fill="none" stroke="#1a1717" stroke-linecap="round" stroke-width="2"/>
      </g>
      <path id="Icon_ionic-ios-checkmark" data-name="Icon ionic-ios-checkmark" d="M17.719,12.863l-.6-.616a.129.129,0,0,0-.1-.041h0a.123.123,0,0,0-.1.041l-4.149,4.18-1.51-1.51a.132.132,0,0,0-.19,0l-.605.605a.136.136,0,0,0,0,.194l1.9,1.9a.6.6,0,0,0,.4.194.631.631,0,0,0,.395-.187h0l4.547-4.571A.145.145,0,0,0,17.719,12.863Z" transform="translate(0.492 -0.434)" fill="#1a1717"/>
    </g>
  </g>
</svg>
</span>Tests</a></li>	
					
<!-- <li
@if ($data['currLi'] == 'analytics' )
class ='active'
@endif
><a href="/analytics"><span class="ico_sv"><svg xmlns="http://www.w3.org/2000/svg" width="27.109" height="14.505" viewBox="0 0 27.109 14.505">
  <g id="graphic-connection" transform="translate(-2 -96.49)">
    <path id="Path_28824" data-name="Path 28824" d="M4.621,110.995a2.619,2.619,0,0,0,2.131-4.144l4.285-3.285a2.613,2.613,0,0,0,3.2,0l2.569,1.569a2.621,2.621,0,1,0,4.262,0l3.892-3.892a2.625,2.625,0,1,0-.608-.608l-3.892,3.893a2.612,2.612,0,0,0-3.047,0l-2.591-1.591a2.621,2.621,0,1,0-4.375,0l-4.307,3.307a2.62,2.62,0,1,0-1.523,4.752Zm20.1-11.883a1.764,1.764,0,1,1,.25.9A1.763,1.763,0,0,1,24.726,99.111ZM18.941,104.9a1.751,1.751,0,0,1,.9.25,1.775,1.775,0,0,1,.608.608,1.761,1.761,0,1,1-3.023,0,1.776,1.776,0,0,1,.608-.608A1.751,1.751,0,0,1,18.941,104.9Zm-8.063-3.4a1.765,1.765,0,1,1,.2.815A1.763,1.763,0,0,1,10.878,101.494Zm-6.257,5.119a1.751,1.751,0,0,1,.9.25,1.776,1.776,0,0,1,.608.608,1.761,1.761,0,1,1-1.511-.858Z"/>
  </g>
</svg>
</span>Analytics</a>
</li> -->
</ul>	
@endif	
</div>