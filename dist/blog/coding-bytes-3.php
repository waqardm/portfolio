<?php 
$title = 'My Blog | Coding Bytes - Part 3';
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
                <h2 class="post-title">Coding Bytes: Part 3 — Javascript Functions</h2>
                        <div class="article-meta">
                            <div class="article-date">
                                <p class="date-published">Date Published: 19 November, 2018</p>
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

                    <p style="font-style: italic;">This is part 2 in the Coding Bytes series, earlier parts are listed below:</p>

                    <ul>
                        <li><a href="coding-bytes-1.php">Part 1</a></li>
                        <li><a href="coding-bytes-2.php">Part 2</a></li>
                    </ul>
                    
                    <h4>What is a Function?</h4>
                    <p>A <code>function</code> is in fact an <code>object</code> designed to perform a specific task, often on a repetitive basis.</p>

                    <h4>Defining a Function</h4>
                    <p>There are a few ways of defining a function, but we will focus on the most basic, so <code>arrow functions/ ES6 functions</code> will be overlooked for now.</p>

<pre class="prettyprint lang-javascript">
&lt;script&gt;
function nameOfFunction (parameters) {
    statement;
}
&lt;/script&gt;
</pre>

                    <p>As seen in the example above, the <code>function</code> keyword is used to define a <code>function</code>. The keyword is followed by a name of your choosing but it is normally good practice to describe what the function does - more on this below.</p>

                    <p>After naming the function we have the <code>parameters</code> in parentheses <code>( )</code> followed by our statment in curly braces <code>{ }</code>. You can have 1 upto 255 <code>parameters</code> defined seperated by a comma. <code>Parameters</code> are similar to<code>placeholders</code> wherein the function knows to look for these to perform its intended use. You may encounter the term <code>arguments</code> used interchangebly, but there is a slight difference, which is better explained in an example.</p>

                    <p style="font-style: italic;">If you are using Chrome, you can try following along in the <a href="https://www.youtube.com/watch?v=PIxpbreS3eU&feature=youtu.be" target="_blank">console</a>.</p>

                    <p><span class="heading-5"> Example</span> <br>
                    In our example, my friend is a carpet fitter who needs to work out the area of a room so he knows how much carpet is required. We know that <code>area = length x width</code>, so how do we put this in a function?</p>
<pre class="prettyprint lang-javascript">
&lt;script&gt;
function area (length, width) {
    return length * width;
}
&lt;/script&gt;
</pre>

                    <p>In the example, our <code>function</code> is named <code>area</code> and the <code>parameters</code> are <code>length, width</code>. You can see a <code>return</code> statement which stops the execution of the function and tells the function that what we are expecting to see as a response. Not putting a <code>return</code> statement, the function will return <code>undefined</code>. In the statement, we are asking for the <code>length</code> and <code>width</code> to be mulitplied. In short, the task of our <code>function</code> is to multiply the <code>parameters</code>.</p>

                    
                    <h4>Invoking a Function</h4>

                    <p><code>Invoking</code> a <code>function</code> is just a fancy way of 'calling' a <code>function</code>. To call a <code>function</code> we just need to reference it by its name followed by <code>parentheses</code>. We can refer back to our example above and <code>invoke</code> the <code>area</code> function.</p>

                    <p><span class="heading-5"> Example</span></p>
<pre class="prettyprint lang-javascript">
&lt;script&gt;
  area(10, 5);
&lt;/script&gt;
</pre>
                    <p>As you can see, we call <code>area</code> but you will notice the <code>10,5</code> in the <code>()</code>. The two figures represent the <code>length, width</code> we mentioned earlier, otherwise known as <code>parameters</code>. But here, because they are actual pieces of information these are known as <code>arguments</code>. Hopefully it is easier to see the difference between the two now 😃 .</p>
                    
                    
                    <p> All we are saying in the <code>invocation</code> above is, run the <code>area</code> <code>function</code> and use <code>10,5</code> as <code>arguments</code>. And as we know our function is set to multiply the two <code>arguments</code>, resulting the output of 50. Congratulations 🎉 we created and <code>invoked</code> our first <code>function</code>.


                     
                    <h4>Further Learning</h4>

                    <p>This was just a very basic <code>function</code>, but you can do so much more! To practice further, think about where a function can come in handy and try to create one. There is another example below, try to understand what it may do before copying into your console.</p>

<pre class="prettyprint lang-javascript">
&lt;script&gt;
function sayHello(name, age){
    console.log(name + " is " + age + " years old.");
}
&lt;/script&gt;
</pre>

                    <p>You will need to research what <code>console.log()</code> does, and remember <code>strings</code> are wrapped with <code>" "</code>. Good Luck! </p>

                    

                    <!-- Say Hi Text  -->
                    <hr>
                    <p class="reading-thanks">Thanks for reading. To keep up with my coding journey come say hi 👋 on <a href="https://twitter.com/lawyerscode" target="_blank">twitter</a> or on our <code>#devNewbie</code> <a href="https://discord.gg/n7JNnK2" target="_blank">Discord server</a> where we have a friendly group of learners sharing their experiences.</a></p>

                </div>
                
            </div>
        </div>
    </main>
<?php include('../inc/footer.php'); ?>