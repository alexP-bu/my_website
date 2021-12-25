<?php 
include_once("header.php");
?>
<div class="content">
    <div class="home-content">
        <h1 class="typed1">Hello, World!</h1>
        <h2 class="typed2">My name is Alex. I'm a developer!</h2>
        <h3 class="typed3">What would you like to see? </h3>
        <div class="arrow-wrapper">
            <i class="fas fa-arrow-down fa-3x"></i>
        </div>
    </div>

    <div class="work-content">
        <!--using work icon as central label-->
        <ul class="work-menu">
            <div class="work-center-icon">
                <i class="fas fa-laptop-code fa-3x"></i>
                <p>My Work</p>
            </div>
            <li style="--i:0;">
                <i class="fas fa-spider fa-2x"></i>
                <p>Web</p>
            </li>
            <li style="--i:1;">
                <i class="fab fa-java fa-2x"></i>
                <p>Java</p>
            </li>
            <li style="--i:2;">
                <i class="fas fa-cogs fa-2x"></i>
                <p>Functional</p>
            </li>
            <li style="--i:3;">
                <i class="fas fa-palette fa-2x"></i>
                <p>Misc</p>
            </li>
            <li style="--i:4;">
                <i class="fas fa-lock fa-2x"></i>
                <p>Security</p>
            </li>
        </ul>
    </div>
    
    <div class="about-content">

    </div>
    
    <div class="contact-content">

    </div>
</div>
<?php
include_once("footer.php");
?>