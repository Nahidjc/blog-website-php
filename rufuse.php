<?php if (isset($_SESSION['username'])) : ?>
    <h1>Home page</h1>
    <p>Welcome <strong>
            <?php echo $_SESSION['username']; ?>
        </strong> </p>
<?php endif ?>