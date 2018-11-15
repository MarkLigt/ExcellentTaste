<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Flowerpower</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>body {overflow-x: hidden;}</style>
<body>
<div id="header">
    <div class="headerlogo">
        	<a href="homepage.php">
        		<p>Flowerpower</p>
            </a>
        
       <!-- <p>Categorieën ↓</p> !-->
    </div>
    
    <div class="headermenu">
    	<ul>
			<li>Webshop</li>
			<li>Abonementen</li>
			<li>Contact</li>
    </div>
    
    <div class="headerlogin">
        <a href="winkelwagen.php"><img src="Images/cart.png"  height="40" width="40"></a>
        <?php session_start();
        if(isset($_SESSION['username']))
        {
            echo "<a href=\"uitloggen.php\"><h2> Uitloggen   " . $_SESSION['username'] . "<h2></a>" ;
        }
        else{
            echo "<a href=\"inlogpagina.php\"><h2>Inloggen</h2></a>";
        }
        ?>
    </div>
	
	
</div>
<div id="container">
	<div class="foto">
		<img src="Images/voorpagina.jpg" />
	</div>
	<div id="uitgelicht">
		<h1>Uitgelicht</h1>
		<div class="artikel">
			<img src="Images/plant1.jpg" class="artikelFoto">
			<h3>Groene plant</h3>
			<p>Dit is een hele mooie groene plant, groeit aan bomen</p>
			<h4>€ 350,00</h4>
			<a href="winkelwagen">stop in winkelwagen</a>
		</div>
		<div class="artikel">
			<img src="Images/plant1.jpg" class="artikelFoto">
			<h3>Blauwe plant</h3>
			<p>zeldzame blauwe plant, gemaakt door de groene vingers smurf</p>
			<h4>€ 250,00</h4>
			<a href="winkelwagen">stop in winkelwagen</a>
		</div>
		<div class="artikel">
			<img src="Images/plant1.jpg" class="artikelFoto">
			<h3>krokodillen plant</h3>
			<p>Deze plant is uitgepoept door een krokdil, speciaal stukje natuur</p>
			<h4>€ 450,00</h4>
			<a href="winkelwagen">stop in winkelwagen</a>
		</div>		
	</div>
	<div id="vestigingen">
	<div class="linkerkant">
		<img src="Images/winkel.jpg" />
	</div>
		<div class="rechterkant">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	
</div>