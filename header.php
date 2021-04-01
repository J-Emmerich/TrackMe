<header>
    <nav>
        <div class="logo-container">
            <div class="img-wrapper">
                <img src="images/logo.webp" alt="logo">
            </div>
            <h1>Your Gym Company</h1>

        </div>

        <div class="menu-wrapper">
            <?php
            if (!isset($_SESSION['userId'])) {
                echo '
            <div class="form-wrapper login">
            <form action="includes/signin.inc.php" method="POST">
            <input type="text" name="username" placeholder="Your Username">
            <input type="password" name="userpwd" placeholder="Your Password">
            <button type="submit" name="login-submit">LogIn</button>
            </form>
            </div>';
            } else {
                echo '
            <div class="form-wrapper logout">
            <form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
            </form>
            </div>';
            } ?>
        </div>

    </nav>
</header>