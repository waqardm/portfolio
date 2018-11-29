<?php 
$title = 'My Blog | Coding Bytes - Part 4';
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
                    <h2 class="post-title">Coding Bytes: Part 4 — Conditional Statements</h2>
                            <div class="article-meta">
                                <div class="article-date">
                                    <p class="date-published">Date Published: 29 November, 2018</p>
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

                        <p style="font-style: italic;">This is part 4 in the Coding Bytes series, earlier parts are listed below:</p>

                        <ul>
                            <li><a href="coding-bytes-1">Part 1</a></li>
                            <li><a href="coding-bytes-2">Part 2</a></li>
                            <li><a href="coding-bytes-3">Part 3</a></li>
                        </ul>
                        
                        <h4>What is a Conditional Statement?</h4>
                        <p><code>Conditional statements</code> come in use when one wants to perform different actions based on different input/criteria. The simplest example is a true or false question. Let's look at an example of an <code>if</code> statement.</p>

                        <h4>if</h4>

 <pre class="prettyprint lang-javascript">
    // Is the sun out today?
    let sun = true;

    if(sun) {
        return 'Yes the sun is shining ☀️';
    }

    // Output will be: Yes the sun is shining ☀️

    // Syntax of if statement
    /*
    if(condition) {
        code that will be executed if condition is true
    }
    */
</pre>

                        <p>So above we are asking if the sun is out (testing the condition) and because it is true, the code between the curly braces (see example of syntax in comments above) is being executed. So what happens if the sun isn't out?</p>

                        <h4>else</h4>

<pre class="prettyprint lang-javascript">
    // Is the sun out today?
    let sun = false;

    if(sun) {
        return 'Yes the sun is shining ☀️';
    } else {
        return 'No, sorry!'
    }

    // Output will be: No, sorry!

    // Syntax of else statement
    /*
    if(condition) {
        code that will be executed if condition is true
    } else {
        execute this code if the first condition is false
    }
    */
</pre>

                        <p>Our <code>else</code> statement allows for a fallback. The <code>else</code> keyword just adds to the <code>if</code> by offering a backup if the condition isn't met.</p>

                        <h4>else if</h4>
                        <p>You can probably guess what the <code>else/if</code> statement does 🤔. </p>
<pre class="prettyprint lang-javascript">
    // Is the sun out today?
    let sun = false;
    let rain = false;

    if(sun) {
        return 'Yes the sun is shining ☀️';
    } elseif (rain) {
        return 'No, sorry it is raining today 🌧️';
    } else {
        return 'It is mild'
    }

    // Output will be: It is mild

    // Syntax of esle/if statement
    /*
    if(condition1) {
        code that will be executed if condition 1 is true
    } elseif (condition 2) {
        execute this code if the condition 1 is false and condition 2 is true
    } else {
        execute this code if all of the above are false
    }
    */
</pre>

                        <p>As we can see, the <code>else/if</code> continues giving us extra options to choose from. The statements are processed/checked from top to bottom, so there must always an <code>else</code> when using <code>else/if</code>. The else isn't necessary for an <code>if</code> statement.</p>
                        
                        <h4>Switch</h4>

                        <p><code>Switch</code> statements are similar to <code>else/if</code> statements.</p>

<pre class="prettyprint lang-javascript">
var day = 'thursday';

switch (day) {
    case 'sunday' :
        day = "Sunday";
        break;
    case 'monday':
        day = "Monday";
        break;
    case 'tuesday':
        day = "Tuesday";
        break;
    case 'wednesday':
        day = "Wednesday";
        break;
    case 'thursday' :
       day = "Thursday";
        break;
    case friday:
        day = "Friday";
        break;
    case  'saturday':
        day = "Saturday";

}

// Syntax of switch statement
    /*
    switch(expression) {
    case x:
        code block
        break;
    case y:
        code block
        break;
    case z:
        code block
        break;
    default:
        code block
}
    */
</pre>


                        <p>The <code>switch</code> statement executes the code, and returns the matched value. The <code>break</code> keyword stops the executing the code once the match has been found as further execution is not required. In the example, a <code>default</code> wasn't used but it can be added if required.</p>

                        <h4>Differences between else/if and switch</h4>
                        
                        <p>There are a few smaller differences between the two, which can be discussed at a later stage.</p>
                    
                        <h4>Further Learning</h4>
                        
                        <p>To practice, create a conditional statement for the following scenario. There are 4 greetings for the day depending on the time.</p>
                            <ul>
                                <li>Between 00.00 and 12.00 the greeting will be 'Good Morning'</li>
                                <li>Between 12.01 and 17.00 the greeting will be 'Good Day'</li>
                                <li>Between 17.00 and 20.00 the greeting will be 'Good Evening'</li>
                                <li>Between 20.01 and 23.59 the greeting will be 'Good Evening'</li>
                            </ul>

                             <p>You can use <code>console.log()</code> for outputting your results or try <a href="https://codepen.io" target ="_blank">CodePen</a> to play around with better syntax highlighting.</p>

                        <p>If you need get stuck drop me a tweet 😃. Good Luck and happy coding!</p>

                        

                        <!-- Say Hi Text  -->
                        <hr>
                        <p class="reading-thanks">Thanks for reading. To keep up with my coding journey come say hi 👋 on <a href="https://twitter.com/lawyerscode" target="_blank">twitter</a> or on our <code>#devNewbie</code> <a href="https://discord.gg/mBsMP2H" target="_blank">Discord server</a> where we have a friendly group of learners sharing their experiences.</a></p>

                    </div>
                </div>
            </div>
        </div>
    </main> 
<?php include('../inc/footer.php'); ?>