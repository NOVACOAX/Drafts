<?php

    session_start();
    include("include/header.php");
?>
<!-- page 404 -->
<main>
	<div class="container">
		<section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
			<h1>404</h1>
			<h2>The page you are looking for doesn't exist.</h2>
			<a class="btn" href="index.php">Back to home</a>
			<img src="assets/images/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
			<div class="credits">
				A <a href="https://www.instagram.com/ma_g_pie/">MAgPIE</a> design.
			</div>
		</section>
    </div>
</main><!-- End #main -->

<!-- end page 404 -->
<?php
    include("include/footer.php");
?>