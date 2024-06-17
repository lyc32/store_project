<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
		<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
		
		<link rel="stylesheet" href="./system/style.css">

		<title>My Company</title>
	</head>

	<body class="container">
		<script>
		  AOS.init ({
			duration: 2000,
			once:true,
			disable: 'mobile'
		   });
		</script>
		
<?php
	session_start();
	
 	require './view/header.php';
	require './view/home.php';
	require './view/product.php';
	require './view/about.php';
	require './view/contact.php';
	require './view/footer.php';
?>
		

	</body>
</html>