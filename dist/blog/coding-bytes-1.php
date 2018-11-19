<?php 
$title = 'My Blog | Coding Bytes - Part 1';
$page = 'blog';
include('../inc/header.php');
 ?>
 <link rel="stylesheet" href="../css/main.css"> 
 <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>

    <main id="">
        <h1 class="lg-heading">
            My <span class="text-secondary">Blog</span>
        </h1>
        <h2 class="sm-heading">
            Follow along my coding journey, thoughts, and more through my posts below.
        </h2>
        
        <img class="responsive" src="../img/blog/codingBytes1.png" alt="Header Image">
        <div class="article-info">
            <div class="post post-1">
                <h2 class="post-title">Coding Bytes: Part 1 — (Intro &) Data Types</h2>
                        <div class="article-meta">
                            <div class="article-date">
                                <p class="date-published">Date Published: 31 October, 2018</p>
                            </div>
                            <div class="article-tags">
                                <ul id="tags">
                                    <li class="post-tags">#beginners</li>
                                    <li class="post-tags">#javascript</li>
                                </ul>
                            </div>
                        </div>
                    <hr>
                <div>
        
                    <h1>Intro</h1>
                    
                    <p>I’ve been learning coding on / off for about 2 years now. Fallen off the wagon plenty of times. The resources available
                    nowadays are much better and more available compared to a couple of years back and though I still consider myself a
                    newbie, I know my way around things a little better now. I know what may be causing an issue and know where to try and
                    look to fix it.</p>

                    <p class="quote"><i class="fas fa-2x fa-quote-left"></i>I’ve also come to peace with the fact that I may learn/work slower than others, and no matter what I do, I can’t learn
                    everything.</p>

                    <p>I’m still rubbish at algorithms but that is a part of my journey that I know I will work through eventually. It’s been
                    a tough ride, especially at the beginning. Even though there is enough support online, getting stuck can be a
                    nightmare! Fixing a problem that’s solution is in your face can sometimes take hours, but I’ve come to accept that as
                    part of the learning process too. I believe that is the hardest part in the beginning — resolving the issue on your own
                    and trying not to give up. I’ve also come to peace with the fact that I may learn/work slower than others, and no
                    matter what I do, I can’t learn everything. Most people will tell you imposter syndrome is too prevalent but the only
                    thing to do is stick through it.</p>

                    <p>It is often said that the best way to learn is to teach something. And though I have a lot to learn still, I wanted to
                    start a series to solidify my learning, and work through the very basics of programming whilst benefitting someone else
                    learning to code (I hope!). I’ve decided on a format which aimed at reducing information overload and hence named it
                    ‘coding bytes’. The idea is small bits of information can be digested easier and when put together with the other
                    pieces, the magic will happen!</p>

                    <p>In each post I will aim to cover one subject/concept without linking it to any other principle or subject. In this way
                    I hope, a learner can take small steps and work through the journey reducing the imposter syndrome.</p>

                    <h2>Preamble...</h2>
                    <p>I will be using Javascript as the chosen programming language (don’t worry, all languages are essentially the same!),
                    just because of its ease of use and the fact that it works straight out of the box from your browser. I have made a
                    video showing how you can do this <a href="https://www.youtube.com/watch?v=PIxpbreS3eU&feature=youtu.be" target="_blank">here</a>.</p>
                    
                    <h4>Basic Data Types</h4>
                    <p>The most basic information we deal with is known as a ‘data type’. All this means is the type of data we are going to
                    work with e.g. a letter, a word, or a paragraph can be used as real world examples of data types. In programming we use
                    the following data types (with examples):</p>

                    <p><span class="heading-4">Integer</span><br>                    An integer is a positive or negative number. <code>4 or -12</code></p>
                    
                    <p><span class="heading-4">Float</span><br> A number with a decimal.<code>3.75</code>
                    </p>

                    <p>Though in Javascript integer and float come under the common number type, I have separated them intentionally as these
                    terms are common many other languages.</p>

                    <p><span class="heading-4">String</span><br> A word or sentence or more. As string can include numbers too. Note the quotation marks that encapsulate the string.
                    <code>“string”, “this is also a string”</code>
                    </p>

                    <p><span class="heading-4">Boolean</span><br> A boolean is a <code>true</code> or <code>false</code> output. Sometimes <code>true</code> is also known as <code>1</code> and <code>false</code> as <code>0</code>.
                    </p>

                    <h4>Other Data Types</h4>

                    <p><span class="heading-4">Variables</span><br> Variables can be explained as a reusable word or box which we can use to store information and later update it. There
                    are a few ways to declare variables, but we’ll stick with the most basic var.</p>
                    
                    <p><code>var age = 4;</code></p>

                    <p><span class="heading-4">Arrays</span><br> The easiest way to describe arrays are to think of a list or collection of something. A to-do list is an array. The
                    list itself is the array, whilst each to-do item is an array element. Note our array is stored in a variable named
                    ‘list’.</p>
                    
<pre class="prettyprint lang-javascript">
&lt;script&gt;
    var list = ["pick up shopping", "call the doctor", "book tickets"];
&lt;/script&gt;
</pre>

                    <p>There are a few more data types, but these should do fine for now as this post has become a little longer than I wanted
                    due to the intro.</p>
                    <hr>
                    <p class="reading-thanks">Thanks for reading. To keep up with my coding journey come say hi 👋 on <a href="https://twitter.com/lawyerscode" target="_blank">twitter</a> or on our <code>#devNewbie</code> <a href="https://discord.gg/n7JNnK2" target="_blank">Discord server</a> where we have a friendly group of learners sharing their experiences.</a></p>

                </div>
                
            </div>
        </div>
    </main>
<?php include('../inc/footer.php'); ?>