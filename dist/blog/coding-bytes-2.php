<?php 
$title = 'My Blog | Coding Bytes - Part 2';
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
                <h2 class="post-title">Coding Bytes: Part 2 — Data Types, Operators, & Syntax</h2>
                        <div class="article-meta">
                            <div class="article-date">
                                <p class="date-published">Date Published: 2 November, 2018</p>
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

                    <p style="font-style: italic;">This is part 2 in the Coding Bytes series, earlier parts are listed below:</p>

                    <ul>
                        <li><a href="coding-bytes-1.php">Part 1</a></li>
                    </ul>
                    
                    <h4>Data Types Continued...</h4>
                    <p>The the first part we didn't get to finish of all of the data types. This was intentional as the post was getting a little longer than I wanted, and secondly, during the course of the series some things will be omitted so as to keep things as simple as possible.</p>

                    <p><span class="heading-4">Objects</span><br>                    We have covered <code>arrays</code> previously, and similar to <code>arrays</code> are <code>objects</code>. An example of an <code>object</code>:</p>
<pre class="prettyprint lang-javascript">
&lt;script&gt;
var me = { 
  firstName:"Waqar", 
  lastName:"Mohammad", 
  age:33, 
  eyeColor:"brown"
};
&lt;/script&gt;
</pre>
                    

                    <p>As you can see, <code>arrays</code> and objects are similar. As we move forward in the series we will go in detail about the difference between <code>arrays</code>, <code>multi-dimensional arrays</code> and <code>objects</code>. For now, we just need to know <code>objects</code> can be used to store data that has descriptive properties, such as in the example where I am the object in question.</p>

                    <p><span class="heading-4">Boolean (again)</span><br> We covered that <code>boolean</code> is a <code>true</code> or <code>false</code> value which can also be represented with <code>'1'</code> or <code>'0'</code>. In actual fact there are a few more <code>'falsy'</code> values. For now, we won't go into details but it's important that we skim over them.</p>

                    <p><span class="heading-5">Falsy Values</span><br>
                    <ul>
                        <li><code>0</code></li><br>
                        <li><code>false</code></li><br>
                        <li><code>null</code></li><br>
                        <li><code>undefined</code></li><br>
                        <li><code>""</code></li><br>
                        <li><code>NaN</code></li>
                    </ul>

                    <h4>Operators</h4>
                     
                    <p><span class="heading-4">Arithmetic Operators</span><br><code>Operators</code> are the same as you will have seen in math(s) class during school and may use daily. These are known as <code>arithmetic operators</code>. The table below shows how they work.</p>
                    
                    <p style="font-style: italic;">Please note: <code>x = 10</code> and <code>y = 3</code> in examples.</p>

                    <img class="responsive-small" src="../img/blog/operators.png" alt="Table with Operators">

                    <p>The <code>modulas</code> operator may be a little confusing, but all we are doing in the example above is dividing <code>x</code> by 3 and asking the computer to carry on dividing equally as long as possible, then give us the remainder which here is 1. So instead of the <code>3.33</code> we get when we do the standard division of <code>10 / 3</code>, we are getting a remainder of <code>1 </code>because <code>3</code> can be divided in to 10 a total 3 times, but on the fourth attempt, there is only <code>1</code> left - which is what the modulas operator gives us. I know it can be confusing at first 😕! But you will get used to it, I promise.</p>
                    
                    <p>Another thing to note is that the <code>++</code> and <code>--</code> operators can come before or after the value in question e.g. <code>++y</code> or <code>y++</code>, and the positioning is important which we will review at a later stage. </p>

                    <p>Lastly, there are other operators which we will review as the series proceeds.
                    </p>
                    
                    <h4>Syntax</h4>

                    <p><code>Syntax</code> in Javascript (and other languages) are a set of rules, such as we have in spoken languages like English.</p>
                     
                    <p><span class="heading-5">Keywords</span><br> We have come across the <code>var</code> keyword before. Keywords are reserved for certain actions where <code>var</code> is used to assign a variable. It must be noted <code>VAR</code> or <code>Var</code> cannot be used instead of var as Javascript is case sensitive.</p>

                    <p><span class="heading-5">Semicolon</span><br> A semicolon or <code>;</code> is used to end a statement, like a full-stop or period <code>.</code> would end a sentence.</p>

                    <p><span class="heading-5">Comments</span><br>We will often need to comment in code, so starting with two slashes <code>//</code> will let ensure any text/data after them will be ignored. An example is shown below. Note the multiline comment syntax too.</p>
<pre class="prettyprint lang-javascript">
// this is an example of a comment.
var test = "test";

/*
This is a
multiline comment
*/
</pre>

                    <p><span class="heading-4">Identifiers</span><br>
                    <code>Identifiers</code> are essentially names. The rule in Javascript is that a first character of an identifier must start with a <code>letter</code>,<code> _</code>, or a <code>$</code> sign. It cannot start with a number. A fun way of learning <code>/</code> testing if your identifier is valid can be seen <a href="https://mothereff.in/js-variables" target="_blank">here.</a></p>

                    <p><span class="heading-4">Types of Case</span><br>
                    
                    <p><span class="heading-5">Camel Case</span><br>
                    <p>In programming we will come across a few types of case. We have come across <code>camel case</code> in the <code>object</code> example above where <code>firstName</code> was the property. In <code>camel case</code> the words have no space between them and the first letter of each word, excluding the first word, are capitalised.</p>
                    
                    <p><span class="heading-5">Pascal Case</span><br>
                    <p><code>Pascal case</code> is exactly like <code>camel case</code>, the only difference being the first word has a capital letter too. So instead of <code>firstName</code> as it would be in camel case, here it would be <code>FirstName</code>.</p>

                    <p><span class="heading-5">Others</span><br>
                    <p>Other examples are <code>underscore</code> where each word is separated by an <code>underscore</code>, <code>first_name</code>. And <code>hyphen</code>, <code>first-name</code>.</p>

                    <p><span class="heading-4">Whitespace and Line Breaks</span><br>
                    
                    <p>Javascript ignores any spaces that you put in between code, unless they are specified in something like a <code>string</code>.</p>

                    

                    <!-- Say Hi Text  -->
                    <hr>
                    <p class="reading-thanks">Thanks for reading. To keep up with my coding journey come say hi 👋 on <a href="https://twitter.com/lawyerscode" target="_blank">twitter</a> or on our <code>#devNewbie</code> <a href="https://discord.gg/n7JNnK2" target="_blank">Discord server</a> where we have a friendly group of learners sharing their experiences.</a></p>

                </div>
                </div>
            </div>
        </div>
    </main>
<?php include('../inc/footer.php'); ?>