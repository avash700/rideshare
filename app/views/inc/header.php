<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">
    <title> <?php echo SITENAME; ?> </title>
</head>

<body id="bg">
    <div class="head">
        <nav class="navbar">
            <div class="logo">
                Ride Share ...<img src="<?php echo URLROOT; ?>images/Asset logo.png">
            </div>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <ul>
                    <li><a href="<?php echo URLROOT; ?>pages">HOMEPAGE</a></li>
                    <li><a href="<?php echo URLROOT; ?>rides/">MY RIDES</a></li>
                    <li><a href="<?php echo URLROOT; ?>rides/add">ADD RIDES</a></li>
                    <li><a href="<?php echo URLROOT; ?>users/logout">LOGOUT</a></li>
                    <li><a href="<?php echo URLROOT; ?>pages/about">ABOUT</a></li>

                </ul>
            <?php else : ?>
                <ul>
                    <li><a href="<?php echo URLROOT; ?>pages/index">HOME</a></li>
                    <li><a href="<?php echo URLROOT; ?>users/login">LOGIN</a></li>
                    <li><a href="<?php echo URLROOT; ?>users/register">REGISTER</a></li>
                    <li><a href="<?php echo URLROOT; ?>pages/about">ABOUT</a></li>

                </ul>
        </nav>
    </div>

<?php endif; ?>