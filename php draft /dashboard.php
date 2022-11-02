<?php
    session_start();
    if(!isset($_SESSION["user-type"])){
        $_SESSION['message'] = "Please log in first.";
        header('Location: login.php');
    }else if($_SESSION["user-type"] != '222' && $_SESSION["user-type"] != '323'){
        $_SESSION['message'] = "Access denied!";
        header('Location: index.php');
    }
    include("db/dbconnect.php");
    include("include/functions.php");
    include("include/header.php");


    include("include/nav-bar.php");
?>

<!-- ======= Sidebar ======= -->
<?php include("include/sidebar.php") ?>

<main id="main" class=" dashboard main">
    <div class="pagetitle">
        <h1>Dashboard<?php if($_SESSION['user-type'] == 323){ echo ' | The Bo$$';}else{echo ' | Editor';} ?></h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">

    </section>
</main><!-- End #main -->
<?php
    include("include/footer.php");
?>