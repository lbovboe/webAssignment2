<?php
require "header.php";
?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Sign Up Form</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo "<p class='signupError'> Fill In All fields !</p>";
                } elseif ($_GET['error'] == "invalidmailuid") {
                    echo "<p class='signupError'> Invalid username and email !</p>";
                } elseif ($_GET['error'] == "invalidmail") {
                    echo "<p class='signupError'> Invalid  email !</p>";
                } elseif ($_GET['error'] == "invaliduid") {
                    echo "<p class='signupError'> Invalid username !</p>";
                } elseif ($_GET['error'] == "passwordcheck") {
                    echo "<p class='signupError'> repeat password not same!</p>";
                } elseif ($_GET['error'] == "usertaken") {
                    echo "<p class='signupError'> Username already exist choose another one!</p>";
                }
            } elseif (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {
                    echo "<p class = 'signupSuccess'>signup success! </p>";
                }
            }
            ?>
            <form class="form-signup" action="../Server/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="pwd" placeholder="password">
                <input type="password" name="pwd-repeat" placeholder="repeat password">
                <button type="submit" name="signup-submit">Sign Up</button>
            </form>
        </section>
    </div>
</main>

<?php
require "footer.php";
?>