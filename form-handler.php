<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Your Info:</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" media="all">

	</head>
	<body>
    <?php
      $name =         $_POST['name'];
  		$email =        $_POST['email'];
      $phone =        $_POST['phone'];
      $address =      $_POST['comments'];
      $favoriteshow = $_POST['gender'];
      $password =     $_POST['password'];
			$hear =					$_POST['hear'];

      if($password == "password1234" || $password =="mothersmaidenname"){

      echo "<h1>Your Information</h1>";
      echo "<h2>Main Information</h1>";

      echo "<ul class='information-list'>";

      if(!empty($name)){
        echo "<li><span class='label'>Name:</span> $name</li>";
      }
			if(!empty($email)){
				echo "<li><span class='label'>Email:</span><a href='mailto:$email'>$email</a></li>";
			}
      if(!empty($phone)){
        echo "<li><span class='label'>Phone:</span><a href='tel:$phone'>$phone</a></li>";
			}
			if(!empty($comments)){
				echo "<li><span class='label'>comments:</span> $comments</li>";
			}

			//show radio button selected
      if($gender == "female"){
        echo "<p>female</p>";
			}
			if($gender=="male"){
				echo "<p>male</p>";
			}
    	if($gender== "none"){
        echo "<p>You chose not to specify or your option was not available</p>";
			}

			//show drop down option selected

			echo "</ul>"
			if($hear == "google"){
				echo "<p>Google helped you find us</p>";
			}
			if($hear=="friend"){
				echo "<p>A friend or family member referred you</p>";
			}
			if($hearr== "reroute"){
				echo "<p>You came from another great website</p>";
			}
			echo "<p></p>"

	      if(!empty($birthday)){
	        $birthday = strtotime($bithday);
	        $birthday = date("F d, Y", $birthday);
	        echo "<li><span class='label'>Happy Birthday!!</span> $birthday</li>";
	      }
    ?>


  </body>
</hmtl>
