<?php
    session_start();
    include("db/dbconnect.php");
    include("include/header.php");
    include("include/functions.php");

    // Create new user
	if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["register"]) {
        $password = test_input($_POST['password']);
		$confirm_password = test_input($_POST['confirm_password']);
        if ($password !=$confirm_password){
            $_SESSION["message"] = "Passwords don't match";
        }else{
            $username = test_input($_POST['username']);
            $email = test_input($_POST['email']);
            // Escape chars
            $username = mysqli_real_escape_string($conn, $username);
            $email = mysqli_real_escape_string($conn, $email);
            $password = mysqli_real_escape_string($conn, $password);
            // Get password harsh
            $password = md5($password);
            // create sql
            $sql = "INSERT INTO `user`(`username`,`email`,`password`, `active`) VALUES('$username', '$email', '$password', '1')";
            $id = mysqli_query($conn, $sql);

            // save to db and check
            if($id){
                // success
                setSession($conn);
                $_SESSION["success"] = "Thank you for creating an account with us";
                header('Location: index.php');
            } else {
                $_SESSION["message"] = "Error creating acount!!!";
            }

        }
        
	}
    

?>

<?php
    include("include/footer.php");
?>