<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="../css/log-in.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body>

<?php require('views/partials/nav.php'); ?>

<div class="log-in">
    <p class="log-in-text">
        Log in to your account
    </p>
    <br><br>

    <form action="/my-account.php" method="post">

        <div class="email">
            <input type="email" name="email" required="required" placeholder="Email" />
        </div>

        <div class="password">
            <input type="password" name="password" required="required" placeholder="Password" />
        </div>
        <br>

        <div class="keep-connected-forgot-password">
            <input type="checkbox" name="keep-connected-forgot-password"> Don't forget me
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="/forgot-password">Forgot password?</a>
        </div>
        <br><br>

        <div class="create-account-button">
            <button type="submit">LOG IN</button>
        </div>
        <br><br>

        <p class="create-account">
            Don't have yet an account? <a href="/register">Sign up</a> here
        </p>

    </form>
</div>

</body>
</html>
