<?php
    session_start();
	include("db/dbconnect.php");
    include("include/header.php");
    include("include/functions.php");

	// Create new user
	if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["login"]) {
		$password = test_input($_POST['password']);
		$username = test_input($_POST['username']);
		// Escape chars
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);
		// Get password harsh
		$password = md5($password);
		// create sql
		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) == 0){
			$_SESSION['message'] = "Login Failed, Invalid Input!";
		}
		else{
			$row=mysqli_fetch_array($result);
			loginSession($row);
			mysqli_free_result($result);
			header('Location: index.php');
		}

		}
		

?>


<?php
    include("include/footer.php");
?>