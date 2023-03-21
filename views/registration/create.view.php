<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Create Account</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="../../css/create.css">
</head>

<body>

<?php require('views/partials/nav.php'); ?>

<div class="sign-up">
    <p class="create-account-text">
        Create account
    </p>
    <br>

    <form method="POST">
        <div class="first-name">
            <input type="text" id="first_name" name="first_name" required="required" placeholder="First Name" />
        </div>

        <div class="last-name">
            <input type="text" id="last_name" name="last_name" required="required" placeholder="Last Name" />
        </div>

        <div class="email">
            <input type="email" id="email" name="email" required="required" placeholder="Email" />
        </div>

        <div class="password">
            <input type="password" id="password" name="password" required="required" placeholder="Password" />
        </div>

        <div class="password-confirmation">
            <input type="password" id="password_confirmation" name="password_confirmation" required="required" placeholder="Confirm Password" />
        </div>
        <br>

        <div class="agree-ts">
            <input type="checkbox" name="agree-ts" required="required"> &nbsp; I agree to <a href="/agree-tc">Terms of Service</a>
        </div>
        <br><br>

        <div class="create-account-button">
            <button type="submit">SIGN UP</button>
        </div>
        <br><br>

        <p class="already-created">
            Have already an account? <a href="/log-in">Log in</a> here
        </p>

    </form>
</div>

</body>
</html>
