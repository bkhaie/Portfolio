<html>
	<head>
		<meta charset="utf-8">
		<meta content="IE-edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Contact 📝</title>
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="stylesheet" href="bootstrap/bootstrap.css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

<body class="light-theme">

<nav class="navbar navbar-expand-lg navbar-dark" >  <!--- Navbar     -->
	<a class="navbar-brand" >Portfolio</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Ervaringen.html">Ervaringen</a>
				</li>
			<li class="nav-item">
				<a class="nav-link" href="Tijdlijn.html">Tijdlijn</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Projecten.html">Projecten</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Contact.html">Contact</a>
			</li> 
			<div class="theme-switch-wrapper"> 			<!--- thema switcher   . -->	
				<label class="theme-switch" for="checkbox">
					<input type="checkbox" id="checkbox" />
					<div class="slider">
					<svg             
						width="16"
						height="16"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
						class="feather feather-sun"
					>
						<circle cx="12" cy="12" r="5"></circle>
						<line x1="12" y1="1" x2="12" y2="3"></line>
						<line x1="12" y1="21" x2="12" y2="23"></line>
						<line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
						<line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
						<line x1="1" y1="12" x2="3" y2="12"></line>
						<line x1="21" y1="12" x2="23" y2="12"></line>
						<line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
						<line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
					</svg>
					<svg
						width="16"
						height="16"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="2"
						stroke-linecap="round"
						stroke-linejoin="round"
						class="feather feather-moon"
					>
						<path
						d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"
						></path>
					</svg>
					</div>
				</label>
				</div>	
		</ul>

</div>
</nav> 												<!--- Navbar End   . -->			

<main>
	
<div id="toggle" style="display: none">   			<!--- Calculator  -->		
	<div class="draggable"  >
		<div class="draggableheader">
			<div class="cal-container">
				<div class="cal-box">	
					<form name="calculator">
						<input id="display" type="text" name="display" placeholder="0" readonly>
					<br>
						<input class="button" type="button" value="7" onclick="calculator.display.value +='7'">
						<input class="button" type="button" value="8" onclick="calculator.display.value +='8'">
						<input class="button" type="button" value="9" onclick="calculator.display.value +='9'">
						<input class="button mathbutton" type="button" value="+" onclick="calculator.display.value +='+'">
					<br>
						<input class="button" type="button" value="4" onclick="calculator.display.value +='4'">
						<input class="button" type="button" value="5" onclick="calculator.display.value +='5'">
						<input class="button" type="button" value="6" onclick="calculator.display.value +='6'">
						<input class="button mathbutton" type="button" value="-" onclick="calculator.display.value +='-'">
					<br>
						<input class="button" type="button" value="1" onclick="calculator.display.value +='1'">
						<input class="button" type="button" value="2" onclick="calculator.display.value +='2'">
						<input class="button" type="button" value="3" onclick="calculator.display.value +='3'">
						<input class="button mathbutton" type="button" value="x" onclick="calculator.display.value +='*'">
					<br>
						<input class="button clearButton" type="button" value="C"onclick="calculator.display.value =''">
						<input class="button" type="button" value="0" onclick="calculator.display.value +='0'">
						<input class="button mathbutton" type="button" value="=" onclick="calculator.display.value = eval(calculator.display.value)">
						<input class="button mathbutton" type="button" value="/" onclick="calculator.display.value +='/'">
					<br>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="toggle2" style="display: none" >   		<!--- TicTakToe  -->		
	<div class="draggable"  >
		<div class="draggableheader">
		<p class="player">Player:<span>×</span></p>

		<table>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		</table>
		<button class="btntic" id="Newgame">New Game</button>
		</div>
	</div>
</div>


<div class="draggable"  >   						<!--- Button widget  -->	
	<div class="draggableheader">
		<div class="expando js-expando">
			<div class="expando__inner js-expando-inner">
				<div class="expando__inner-inverter js-expando-inner-inverter">
					<div class="expando__content js-content">
						<ul class="expando__content-list">
							<li>  <button class="button1" onclick="openCalculator()">🧮Calculator </button> </li>
							<li>  <button class="button1" onclick="openTictak()">🎮TicTak </button> </li>
						</ul>
						<button class="expando__close js-expando-collapse-btn">Close</button>
					</div>
						<button class="expando__btn js-expando-expand-btn">
						<div class="plusgroote">
						<B>+</B>
						</div>
						</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="contact-container"> 						<!--Contact-->
	<form>
		<h3 class="contact">Contact</h3>	
		<div class="form-group">
			<input type="text" class="form-control" name="Naam" placeholder="Volledige naam"  required >
		</div>

		<div class="form-group">
			<input type="email" class="form-control" name="Email" placeholder="Email" required>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="Onderwerp" placeholder="Onderwerp">
		</div>

		<div class="form-group">
			<textarea class="form-control" rows="7" name="Bericht" placeholder="Schrijf uw bericht." required></textarea>
		</div>
		<button name="versturen" class="btn btn-primary contact-btn">VERSTUUR</button>
	</form>
</div>

</main>

<footer class="footer"> <!--footer--------------->
	<h2>Social media</h2>
	<p>Wil je meer zien van mij?  </p>
		<div class="social-icons">
			<a href="https://github.com/bkhaie" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
			<a href="https://twitter.com/Badrkhaie" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
			<a href="https://www.linkedin.com/in/badr-khaie-2b805267/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
			<a href="https://www.youtube.com/channel/UCZ-RI7bsQ7fF7bVr_5RS8lg" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
		</div>
		<p class="copyright">Butter since 1998 ©</p>
</footer> <!--footer end --------------->

<script src="JS/expando.js"></script> <!--Widget + Rekenmachine+ BTE------->
<script src="JS/dark.js"></script> <!--Dark mode --------------->
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script> <!--Custom Font awesome-->
</body>
</html>