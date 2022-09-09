<!-- Credits do not remove  				
This Contact form created by 
Fernando Machado > https://github.com/fmachadoweb	


Demo in: https://alfawebhost.com.br/hitcounter/ -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hit Counter - Made with PHP and CSS</title>
	<style>
		* {
			text-align: center;
			background-color: #045FB4;
			color: #A9E2F3;
		}

		h1 {
			padding-top: 10px;
			font-size: 80px;
			font-family: 'Roboto', sans-serif;
			text-shadow: 2px 2px #ff0000;

		}

		h2 {
			padding-top: 50px;
			font-size: 60px;
			font-family: 'Roboto', sans-serif;
			text-shadow: 2px 2px #ff0000;

		}

		p {
			padding-top: 50px;
		}

		code, footer {
			text-shadow: 1px 1px #000;
		}


	</style>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
</head>
<body>
			<h2>
			<u>Simple</u>
			</h2>
			<h1>
			Hit Counter
			</h1>
			<code>
			Made with PHP and CSS
			</code>			
			<p>
			<?php
			session_start();
			$counter_name = "counter.txt";

			// Check if a text file exists.
			// If not create one and initialize it to zero.
			if (!file_exists($counter_name)) {
			  $f = fopen($counter_name, "w");
			  fwrite($f,"0");
			  fclose($f);
			}

			// Read the current value of our counter file
			$f = fopen($counter_name,"r");
			$counterVal = fread($f, filesize($counter_name));
			fclose($f);

			// Has visitor been counted in this session?
			// If not, increase counter value by one
			if(!isset($_SESSION['hasVisited'])){
			  $_SESSION['hasVisited']="yes";
			  $counterVal++;
			  $f = fopen($counter_name, "w");
			  fwrite($f, $counterVal);
			  fclose($f);
			}

			echo "We already had <u>$counterVal</u> visitors"; 
			?>
			</p><br><br><br>

			<footer>Coded By <a href="https://github.com/fmachadoweb" target="_blank"> Fernando Machado</a></footer>
</body>
</html>

