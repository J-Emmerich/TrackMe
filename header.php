<header>
    <nav>
        <div class="logo-wrapper">
            <div class="image-logo-wraper">
                <img src="images/logo.webp" alt="logo">
            </div>
        </div>

        <div class="nav-wrapper">
        <?php
        if(!isset($_SESSION['userId']))
        {
            echo'
            <div class="form-login-wrapper">
                <form action="includes/signin.inc.php" method="POST">
                    <input type="text" name="username" placeholder="Your Username">
                    <input type="password" name="userpwd" placeholder="Your Password">
                    <button type="submit" name="login-submit">LogIn</button>
                </form>
            </div>
            <div class="form-signup-wrapper">
                <form action="includes/signup.inc.php" method="POST">
                    <input type="text" name="username" placeholder="Choose your username">
                    <input type="text" name="useremail" placeholder="whats your email?">
                    <input type="password" name="userpwd" placeholder="Your Password Here">
                    <input type="password" name="userpwd-repeat" placeholder="Repeat our password">
                    <button type="submit" name="signup-submit">Sign Up</button>
                </form>
            </div>';
        }else{
echo '
            <div class="form-logout-wrapper">
            <form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
            </form>
            </div>';
        } ?>        
        </div>
    </nav>
</header>