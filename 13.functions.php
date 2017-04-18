<!DOCTYPE html>
<html>
  <head>
    <title>Functions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Functions</h1>

    <p>PHP has more than 1000 built in functions.</p>

    <h2>User Defined Functions</h2>

    <p>We can create our own functions.</p>

    <p>A function is a block of statements that can be used repeatedly in a program.</p>

    <p>A function will NOT execute immediately when a page loads.</p>

    <p>A function will be executed by a call to the function.</p>

    <hr />

    <h2>Create a User Defined Function</h2>

    <p>A user defined function declaration starts with the word "function":</p>

    <pre><code>
      function functionName() {
        code to be executed;
      }
    </code></pre>

    <p><strong>Note:</strong> A function name can start with a letter or underscore (not a number).</p>

    <p><strong>Tip:</strong> give the function a name that reflects what the function does.</p>

    <p><strong>Function names are NOT case sensitive.</strong></p>

    <h3>Example: user defined function</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        function writeMsg()<br />
        {<br />
            echo "Hello World!";<br />
        }<br />
  <br />
        writeMsg(); //call the function<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>PHP Function Arguments</h2>

    <p>Information can be passed to functions through arguments. An argument is just like a variable.</p>

    <p>Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.</p>

    <h3>Example: function with one argument</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        function familyName($fname)<br />
        {<br />
            echo "$fname Atwood.&lt;br /&gt;";<br />
        }<br />
  <br />
        familyName("Joseph");<br />
        familyName("Mike");<br />
        familyName("Jenny");<br />
      ?&gt;
    </code></pre>



    <h3>Example: function with two arguments</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        function familyName2($fname, $year)<br />
        {<br />
            echo "$fname Atwood, Born in $year &lt;br /&gt;";<br />
        }<br />
  <br />
        familyName2("Joseph", "1979");<br />
        familyName2("Mike", "1977");<br />
        familyName2("Jenny", "1975");<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>PHP Default Argument Value</h2>

    <p>If you call a function without arguments, it can still take a default value as an arguement:</p>

    <h3>Example: default argument value (default is 50)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        function setHeight($minheight = 50)<br />
        {<br />
            echo "The height is: $minheight &lt;br /&gt;";<br />
        }<br />
  <br />
        setHeight(350);<br />
        setHeight(); //will use default argument of 50<br />
        setHeight(400);<br />
        setHeight();<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>Returning Values</h2>

    <p>To let a function return a value, use the return statement:</p>

    <h3>Example: return statement</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        function sum($x, $y)<br />
        {<br />
            $z = $x + $y;<br />
            return $z;<br />
        }<br />
  <br />
        echo sum(5, 10) . "&lt;br /&gt;";<br />
        echo sum(3, 4) . "&lt;br /&gt;";<br />
        echo sum(7, 5);<br />
      ?&gt;<br />
    </code></pre>

  </body>
</html>
