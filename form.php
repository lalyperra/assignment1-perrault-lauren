<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Togegther we're better</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" media="all">

	</head>
	<body id="main_body" >

		<div class="container">
      <h1>Tell me about yourself</h1>
      <form id="sample-form" class="testing-form" method="post" action="form-handler.php">
        <fieldset>
          <legend>User Information</legend>
          <ul>
            <li>
                <label for "name">Name:</label>
                <input type="text" id="name" name="name">
            </li>
						<li>
								<label for "email">Email:</label>
								<input type="email" id="email" name="email">
						</li>
            <li>
                <label for "phone">Phone:</label>
                <input type="tel" id="phone" name="phone">
            </li>
						<li>
							<label for "password">What is your password?</label>
							<input type="password" id="password" name="password">
						</li>
            <li>
                <label for "gender">Gender:</label>
									<input type="radio" id="female" name="gender" value="female">
									<label for="female">Female</label><br>

									<input type="radio" id="male" name="gender" value="male"
									<label for="male">Male</label><br>

									<input type="radio" id="other" name="gender" value="other">
								  <label for="other">Other</label><br>

            </li>
            <li>
                <label for "hear">How did you hear about us:</label>
								<select id="hear" name="hear">
									<option value="google">Google Search</option>
									<option value="friend">Friend or Family</option>
									<option value="reroute">Another Website</option>
								</select>
            </li>
						<li>
								<label for "comments">Comments:</label>
								<input type="text" id="comments" name="comments">
						</li>
          </ul>
        </fieldset>
        <input type="submit" value="submit">
        </form>
    </div>
  </body>
</html>
