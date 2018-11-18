<?php 
$title = 'My Blog | Waqar Mohammad';
$page = 'blog';
include('../inc/header.php');
 ?>
 <link rel="stylesheet" href="../css/main.css"> 
    <main id="">
        <h1 class="lg-heading">
            My <span class="text-secondary">Blog</span>
        </h1>
        <h2 class="sm-heading">
            Follow along my coding journey, thoughts, and more through my posts below.
        </h2>
        <div class="blog-info">
            <div class="post post-1">
                <img class="responsive" src="/img/blog/codingBytes2.png" alt="">
                <h2 class="post-title"><a href="/blog/coding-bytes-2.php">Coding Bytes: Part 2 — Data Types, Operators, & Syntax</a></h2>
                <p>Date Published: 2 November, 2018</p>
                <p>It is often said that the best way to learn is to teach something. And though I have a lot to learn still, I
                    wanted to
                    start a series to solidify my learning, and work through the very basics of programming.</p>
                <ul>
                    <li class="tags">#beginners</li>
                    <li class="tags">#javascript</li>
                    <li class="tags">#codingBytes</li>
                </ul>
            </div>

            <div class="post post-2">
                <img class="responsive" src="/img/blog/codingBytes1.png" alt="">
                <h2 class="post-title"><a href="/blog/coding-bytes-1.php">Coding Bytes: Part 1 — (Intro &) Data Types</a></h2>
                <p>Date Published: 31 October, 2018</p>
                <p>It is often said that the best way to learn is to teach something. And though I have a lot to learn still, I wanted
                    to
                    start a series to solidify my learning, and work through the very basics of programming.</p>
                <ul>
                    <li class="tags">#beginners</li>
                    <li class="tags">#javascript</li>
                    <li class="tags">#codingBytes</li>
                </ul>
            </div>
        </div>
    </main>
    <?php include('../inc/footer.php'); ?>