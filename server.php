 <?php

session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$numb = mysqli_real_escape_string($db, $_POST['numb']);
	$instrument = mysqli_real_escape_string($db, $_POST['instrument']);
	$role = mysqli_real_escape_string($db, $_POST['role']);


	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }
	if (empty($address)) { array_push($errors, "Address is required"); }
	if (empty($numb)) { array_push($errors, "Number is required"); }
	if (empty($instrument)) { array_push($errors, "Instrument is required"); }


	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO users (username, email, password, address, numb, instrument) 
				  VALUES('$username', '$email', '$password', '$address', '$numb', '$instrument')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}

}

// ... 

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			//header('location: index.php');

       //if (mysql_num_rows($result)==1){

                //session_start();
                //$_SESSION["user"]=$user;
                //$_SESSION["pass"]=$pass ;

                       
                        if ($row['role']='Admin'){
                        header("location:index.php");
                        }
                        elseif ($row['role']='Student') {
                        header("location:index.php");
                        }

		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}

}

?>