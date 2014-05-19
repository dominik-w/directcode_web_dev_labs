<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App core - Laravel </title>
	<style>
		body {
			margin:0;
			font-family: 'Arial', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 40%;
			top: 5%;
			margin-left: 5px;
			margin-top: 5px;
            border: solid 1px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
        <h1>Menu</h1>
        <br />
        <?php
        $url_users = URL::to('users');
        $url_about = URL::to('about');
        ?>
        <a href="<?php echo $url_users ?>"> Users </a>
        <br />
        <a href="<?php echo $url_about ?>"> About </a>
        
	</div>
</body>
</html>
