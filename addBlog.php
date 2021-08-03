<?php

include_once("config.php");
include_once("function.php");

check_login_user();

?>



<?php if (isset($_SESSION['username'])) : ?>
    <h1>Home page</h1>
    <p>Welcome <strong>
            <?php echo $_SESSION['username']; ?>
        </strong> </p>
<?php endif ?>