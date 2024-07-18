<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">   -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Home Page</title>
    <link rel="stylesheet" href="./style.css">
    <script
    src="https://kit.fontawesome.com/29865ec48b.js"
    crossorigin="anonymous"
  ></script>
  <link rel="shortcut icon" href="./img/home/Brand.svg">
</head>
<body>
<?php wp_head()?>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <!-- branding -->
                <div class="branding">
                    <img src="./img/home/Brand.svg" alt="logo" href="./home.html">
                    <h2>Creative <span>Visual </span>Design</h2>
                </div>
                <nav>
                    <ul class="header__nav">
                        <li><a id="active" href="./index.html">Home</a></li>
                        <li><a href="./about.html">About</a></li>
                        <li><a href="./update.html">Update</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>

                <!-- toggle menu -->
                 <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </header>