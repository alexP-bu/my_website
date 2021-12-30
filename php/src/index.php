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
            <li class="work-menu-item" id="web-dev">
                <span>|</span>
                <i class="fas fa-spider fa-3x"></i>
                <p>Web Development</p>
            </li>
            <li class="work-menu-item" id="java-dev">
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
                <i class="fab fa-java fa-3x"></i>
                <p>Java Development</p>
            </li>
            <li class="work-menu-item" id="func-dev">
                <i class="fas fa-cog fa-3x"></i>
                <p>Programming Projects</p>
            </li>
            <li class="work-menu-item" id="sec-dev">
                <i class="fas fa-lock fa-3x"></i>
                <i class="fas fa-unlock fa-3x"></i>
                <p>Security Development</p>
            </li>
        </ul>
    </div>
    
    <div class="about-content">
        <p>My name is Alexander Pozin! 
        <p>Here's me:</p>
        <img src="./imgs/alex_photo.jpg" alt="Photo of Alex">
        <ul>
            <li>
                <i class="fas fa-check-circle"></i>
                <p>I'm current a senior at Boston University studying computer science.</p>
            </li>
            <li>
                <i class="fas fa-check-circle"></i>
                <p>I love programming!</p>
            </li>
            <li>
                <i class="fas fa-check-circle"></i>
                <p>Most of all, I enjoy learning new ways to code and solve problems. 
            </li>
            <li>
                <i class="fas fa-check-circle"></i>
                <p>Right now, I'm studying cybersecurity and cryptography.</p>
            </li>
        </ul>
        <a href="./assets/resume.docx">Download my resume!</a>
    </div>
    
    <div class="contact-content">
        <form>
            <div class="names">
                <label for="first">First Name:</label>
                <input type="text" id="first" name="first-name">
                <label for="last">Last Name:</label>
                <input type="text" id="last" name="last-name">
            </div>
            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email-address">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="message-subject">
            <label for="message">Message:</label>
            <textarea type="text" id="message" name="message-text"></textarea>
            <div class="input">
                <input type="Submit">
                <input type="reset">
            </div>
        </form>
    </div>
</div>
<?php
include_once("footer.php");
?>