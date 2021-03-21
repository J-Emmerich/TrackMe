<header>
    <nav class="navbar">
        <div class="container">
            <div class="nav-header">
                <div class="image-logo-wraper">
                    <img src="images/logo.webp" alt="logo">
                </div>
                <div class="site-title">
                    <h1>Your Gym Company</h1>
                </div>

            </div>

            <div class="menu-wrapper">
                <?php
                if (!isset($_SESSION['userId'])) {
                    echo '
            <div class="form-login-wrapper">
            <form action="includes/signin.inc.php" method="POST">
            <input type="text" name="username" placeholder="Your Username">
            <input type="password" name="userpwd" placeholder="Your Password">
            <button type="submit" name="login-submit">LogIn</button>
            </form>
            </div>';
                } else {
                    echo '
            <div class="form-logout-wrapper">
            <form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
            </form>
            </div>';
                } ?>
            </div>
        </div>
    </nav>
</header>