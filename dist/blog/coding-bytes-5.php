<?php 
$title = 'My Blog | Coding Bytes - Part 5';
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
        <div class="article-box">
            <div class="article-info">
                <div class="post post-1">
                    <h2 class="post-title">Coding Bytes: Part 5 - Loops</h2>
                            <div class="article-meta">
                                <div class="article-date">
                                    <p class="date-published">Date Published: 13 December, 2018</p>
                                </div>
                                <div class="article-tags">
                                    <ul id="tags">
                                        <li class="post-tags">#beginners</li>
                                        <li class="post-tags">#javascript</li>
                                        <li class="post-tags">#codingBytes</li>
                                    </ul>
                                </div>
                            </div>
                        <hr>
                    <div>

                        <p style="font-style: italic;">
                            This is part 5 in the Coding Bytes series, earlier parts can be viewed <a href="/blog">here</a>.
                        </p>
                        
                        <h4>What is a Loop?</h4>
                        <p>In programming, <code>Loops</code> are used to perform repeated tasks based on a set condition. As an example, if we wanted to run a piece of code <code>x</code> amount of times.</p>

                        <h4>'for' Loop</h4>

 <pre class="prettyprint lang-javascript">
    // A random array with my items from my football kit
    const kit = ['Sweater', 'Shorts', 'Socks', 'Ball'];

    for (let i = 0; i < kit.length; i++) { 
        console.log(kit[i]);
    }

    /*
    Breakdown
    for (begin; condition; step) {
        // ... loop body ...
    }
    */
</pre>

                        <p>
                            The <code>for</code> loop is the most commonly used and it can be tricky to understand what is going on at first, but lets break it down. Firstly, look at the <code>syntax</code> which is like an <code>if</code> statement. You have the <code>for</code> keyword, followed by parentheses for the conditions and the curly braces for the code that will be <code>looped</code>.
                        </p>
                            
                        <p>
                         &#8594; <code>const kit = ['Sweater', 'Shorts', 'Socks', 'Ball'];</code><br>
                         We are declaring an array to <code>loop</code> over (which is just another way of saying checking through / going through).
                        </p>
                        
                        <p>
                           &#8594;  <code>for</code> Similar to <code>if</code>, we are starting the <code>for loop</code>
                        </p>
                        
                        <p>
                            &#8594; <code>(let i = 0; i < kit.length; i++)</code> This is where it gets a little confusing. For me, the <code>i</code> was the part which didn't click. So we can start with that. The <code>i</code> can be any letter or word, it is just used similar to a variable to indicate the element in question.
                        </p>

                        <p>
                            &#8594; Looking at the example above, when we declare <code>i = 0</code>, we are asking the loop to <code>begin</code> at <code>point 0</code> in the array, which will be the beginning (sweater). (To see why 0 is at the first item you can read <a href="https://en.wikipedia.org/wiki/Zero-based_numbering" target="_blank">this article</a>).
                        </p>

                        <p>
                            &#8594; <code>i < kit.length</code> is setting our <code>condition</code> stating while <code>i</code> is less than the <code>length</code> of our <code>kit</code> array, carry on <code>looping</code>.
                        </p>
                        
                        <p>
                            &#8594; Finally <code>i++</code> is the step to be taken on each <code>loop</code>. In our example, after each <code>loop</code> we want <code>i</code> to increment by one.
                        </p>

                        <p>
                            &#8594; <code>{ console.log(kit[i]); }</code> Within the <code>loop</code> body, we are asking it to <code>console.log()</code> the element on each iteration of the <code>loop</code>.
                        </p>

                        <p>
                           &#8594; Specifically the <code>kit[i]</code> is referring to each element of the array, where <code>kit</code> is our array and <code>[i]</code> is pointing to the element.
                        </p>

                        <p>
                            😬 It may be a little crazy at first, but run through it a few times then try typing the example code out and watch the console for the output. There is also a <code>for/in loop</code> which we will cover in the future, enough 🤯 for now.
                        </p>

                        <h4>'while' Loop</h4>

<pre class="prettyprint lang-javascript">
    
    let i = 0;
    while(i < 4){
        console.log(i)
        i++;
    }

    /* 
    Breakdown
    while (condition){
        code
        loop
    }
    */
</pre>

                        <p>
                            <code>Just be careful with ALL loops as you could end up running an endless loop if all the elements are not input correctly.</code>
                            <br>
                            <br>
                            With the <code>while loop</code> you can see the similarities in structure and syntax. These are less common but once you've understood the <code>for loop</code> it should make sense enough. 😉
                        </p>

                        <p>As <code>loops</code> can be awkward to get to grips with, practice as much as possible. Why not try out the tasks below?</p>
                    
                        <h4>Further Learning</h4>
                        
<pre class="prettyprint lang-javascript">
    
    for (let i = 0; i < 10; i++) {
        console.log( i );
    }

</pre>
                        <p>
                           1. Read the code above and write down what you think it will output before coding it yourself.
                        </p>
                        <p>
                           2. Change the <code>for loop</code> in to a <code>while loop</code>.
                        </p>
                        <p>
                            If you get stuck drop me a tweet 😃. Good Luck and happy coding!
                        </p>

                        <p style="font-style: italic;">
                            This will be the last part of Coding Bytes for this year as I will be working to update the blog (currently I'm doing everything manually in HTML/CSS). Happy holidays! 🎄
                        </p>

                        

                        <!-- Say Hi Text  -->
                        <hr>
                        <p class="reading-thanks">Thanks for reading. To keep up with my coding journey come say hi 👋 on <a href="https://twitter.com/lawyerscode" target="_blank">twitter</a> or on our <code>#devNewbie</code> <a href="https://discord.gg/mBsMP2H" target="_blank">Discord server</a> where we have a friendly group of learners sharing their experiences.</a></p>

                    </div>
                </div>
            </div>
        </div>
    </main> 
<?php include('../inc/footer.php'); ?>