<?php 
$title = 'About | Waqar Mohammad';
$page = 'about';
include('../inc/header.php');
 ?>
    <link rel="stylesheet" href="../css/main.css"> 
    <main id="">
        <h1 class="lg-heading">
            About <span class="text-secondary">Me</span>
        </h1>
        <h2 class="sm-heading">
           A bit about myself!
        </h2>
        <div class="about-info">
            <img src="/img/portrait.jpg" alt="Waqar Mohammad" class="bio-image">
            <div class="bio">
                <h3 class="">BIO</h3>
                <p>
                    <span class="text-secondary">I'm a Ruby developer currently seeking suitable roles.</span>
                <br> After graduating with a Law Degree, I decided to stick with my passion for software engineering through self-learning. Feel
                free to look at my <a href="../portfolio.html">portfolio</a> and
                <a href="../contact.html">contact me</a> if you feel we can work together. I've listed my focus areas below for <span class="text-secondary">spring 2021</span>.</p>
            </div>
            <!-- <div class="focus">
                <h2>Focus for Fall <span class="text-secondary">&amp;&amp;</span> Winter 2018 </h2>
            </div> -->
            <div class="job job1">
                <h3>The Odin Project</h3>
                <h4>Ruby</h4>
                <p>Working through the syllabus for the Ruby path which includes Ruby on Rails. I hope to complete the 9 remaining Ruby lessons, Databases, and Ruby on Rails by the end of Spring </p>
            </div>
            <div class="job job2">
                <h3>Projects</h3>
                <h4>Making things!</h4>
                <p>After years of looping through the tutorial circle, I want to focus on making whatever I can on top of the projects as part of The Odin Project</p>
            </div>
            <div class="job job3">
                <h3>Personal</h3>
                <h4>Blogging</h4>
                <p>Start blogging again on basic subjects to solidify knowledge and increase exposure which will help with job search.</p>
            </div>
        
        </div>
    </main>
    <?php include('../inc/footer.php'); ?>