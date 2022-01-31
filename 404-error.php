<!-- Header Section  -->
<?php include('layout/header.php') ?>
<div id="content" class="site-content">
    <div class="container">
        <div class="error-404 not-found text-center">
            <h2><img class="error-image" src="https://via.placeholder.com/524x184.png" alt="404"></h2>
            <h1>Sorry! Page Not Found!</h1>
            <div class="content-404">
                <p>Oops! The page you are looking for does not exist. Please return to the site is homepage.</p>
                <form role="search" method="get" id="search-form" class="search-form">
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                </form>
                <a class="octf-btn" href="index.php">Take Me Home</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section -->
<?php include('layout/footer.php') ?>
