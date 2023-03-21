<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Account</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="css/my-account.css">
</head>

<body>
<?php require('views/partials/nav.php'); ?>

<div class="dropdown">
    <button class="dropdown-button">
        <img class="h-13 w-13 rounded-full" src="https://images.unsplash.com/photo-1628260412297-a3377e45006f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2874&q=80" alt="">
    </button>
    <div class="dropdown-content">
        <a href="#">Your Profile</a>
        <a href="#">Settings</a>
        <a href="#">Sign Out</a>
    </div>
</div>

</body>

</html>