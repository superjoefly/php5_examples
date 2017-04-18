<!DOCTYPE html>
<html>
  <head>
    <title>Variables</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Variables</h1>

    <p>Variables are "containers" for storing information.</p>

    <hr />

    <h2>Creating (Declaring) PHP Variables</h2>

    <p>In PHP, a variable starts with the $ sign, followed by the name of the variable.</p>

    <h3>Example: (variables)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $txt = "Hello World";<br />
        $x = 5;<br />
        $y = 10.5;<br />
      ?&gt;
    </code></pre>

    <p>The variable $txt holds the value "Hello World" etc...</p>

    <p><strong>Note:</strong> a text value requires quotes.</p>

    <p><strong>Note:</strong> PHP has no command for declaring a variable. It is created the moment you first assign a value to it.</p>

    <p><strong>Variables are containers for storing data.</strong></p>

    <hr />

    <h2>PHP Variables</h2>

    <p>A variable can have a short name (like x or y), or a more descriptive name (age, carname, total_volume).</p>

    <p>Rules for PHP variables:</p>

    <ul>
      <li>A variable starts with the $ sign, followed by the name of the variable</li>
      <li>A variable name must start with a letter or the underscore character</li>
      <li>A variable name CANNOT start with a number</li>
      <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _)</li>
      <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
    </ul>

    <p><strong>PHP variable names are case-sensitive.</strong></p>

    <hr />

    <h2>Output Variables</h2>

    <p>The PHP <b>echo</b> statement is often used to output data to the screen.</p>

    <h3>Example: (output)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $txt = "SuperJoeFly";<br />
        echo "I Love $txt!";<br />
      ?&gt;<br />
    </code></pre>

    <h3>Example: (output2)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $txt = "SuperJoeFly";<br />
        echo "I love " . $txt . "!";<br />
      ?&gt;<br />
    </code></pre>

    <h3>Example: (output sum of two variables)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 6;<br />
        $y = 7;<br />
        echo $x + $y;<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h2>PHP is Loosely Typed</h2>

    <p>We do not have to tell PHP which data type the variable is.</p>

    <p>PHP automatically converts the variable to the correct type, depending on its value.</p>

    <hr />

    <h2>PHP Variable Scope</h2>

    <p>In PHP, variables can be declared anywhere in the script.</p>

    <p>The scope of a variable is the part of the script where the variable can be referenced/used.</p>

    <p>PHP has 3 different variable scopes:</p>

    <ul>
      <li>local</li>
      <li>global</li>
      <li>static</li>
    </ul>

    <hr />

    <h2>Global and Local Scope</h2>

    <p>A variable declared <b>outside</b> a function has a <b>global scope</b> and can only be accessed outside a function:</p>

    <h3>Example: (global variable)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
          $x = 5; // global scope<br />
      <br />
          function myTest()<br />
          {<br />
              //using x inside this function will generate an error<br />
            echo "&lt;p&gt;Variable x inside function is: $x&lt;/p&gt;";<br />
          }<br />
      <br />
          myTest();<br />
            //using x outside the function works<br />
            echo "&lt;p&gt;Variable x outside function is: $x&lt;/p&gt;";<br />
          ?&gt;
    </code></pre>

    <p>A variable declared <b>within</b> a function is called a <b>local scope</b> and can only be accessed within that function.</p>

    <h3>Example: (local variable)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        function myTest2()<br />
        {<br />
            $x = 5; // local scope<br />
            echo "&lt;p&gt;Variable x inside function is: $x&lt;/p&gt;";<br />
        }<br />
        myTest2();<br />
  <br />
        // using x outside the function will generate an error<br />
        echo "&lt;p&gt;Variable x outside function is: $x&lt;/p&gt;";<br />
      ?&gt;<br />
    </code></pre>

    <p>You can have local variables with the same name inside different functions, because local variables are only recognized by the function in which they are declared.</p>

    <hr />

    <h2>The global Keyword</h2>

    <p>The <b>global</b> keyword is used to access a global variable from within a function.</p>

    <h3>Example: (access global variable using global keyword)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 5;<br />
        $y = 6;<br />
  <br />
        function myTest3()<br />
        {<br />
            global $x, $y;<br />
            $y = $x + $y;<br />
        }<br />
  <br />
        myTest3();<br />
        echo $y;<br />
      ?&gt;
    </code></pre>

    <hr />

    <p>PHP stores all global variables in an array called <b>$GLOBALS[index]</b>. The index holds the name of the variable. The array is also accessible from within functions and can be used to update global variables directly.</p>

    <h3>Example: (same as above but using "GLOBALS[index]")</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 5;<br />
        $y = 6;<br />
  <br />
        function myTest4()<br />
        {<br />
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];<br />
        }<br />
  <br />
        myTest4();<br />
        echo $y;<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h2>The static Keyword</h2>

    <p>Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We may need it for another job...</p>

    <p>To do this use the <b>static</b> keyword when you first declare the variable:</p>

    <h3>Example: (static keyword)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        function myTest5()<br />
        {<br />
            static $x = 3;<br />
            echo $x;<br />
            $x++;<br />
        }<br />
  <br />
        myTest5();<br />
        myTest5();<br />
        myTest5();<br />
      ?&gt;<br />
    </code></pre>

    <p>Then, each time the function is called, that variable will still have the information it contained from the last time it was called.</p>

    <p><strong>Note:</strong> the variable is still local to the function.</p>

  </body>
</html>
