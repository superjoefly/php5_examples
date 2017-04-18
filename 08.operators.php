<!DOCTYPE html>
<html>
  <head>
    <title>Operators</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
    <style>
    p {
      color: blue;
    }
    </style>
  </head>
  <body class="w3-margin">

    <h1>Operators</h1>

    <p>Operators are used to perform operations on variables and values.</p>

    <p>PHP divides the operators into the following groups:</p>

    <ul>
      <li>Arithmetic operators</li>
      <li>Assignment operators</li>
      <li>Comparison operators</li>
      <li>Increment/Decrement operators</li>
      <li>Logical operators</li>
      <li>String operators</li>
      <li>Array operators</li>
    </ul>

    <hr />

    <h2>Arithmetic Operators</h2>

    <p>Arithmetic operators are used with numeric values to perform common arithmetic operations, such as addition, subtraction, multiplication etc.</p>

    <h3>Examples: arithmetic operators</h3>

    <p>Addition (+)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 5;<br />
        $y = 6;<br />
        echo $x + $y;<br />
      ?&gt;
    </code></pre>


    <p>Subtraction (-)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 13;<br />
        $y = 7;<br />
        echo $x - $y;<br />
      ?&gt;
    </code></pre>

    <p>Multiplication (*)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 5;<br />
        $y = 4;<br />
        echo $x * $y;<br />
      ?&gt;
    </code></pre>



    <p>Division (/)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 20;<br />
        $y = 5;<br />
        echo $x / $y;<br />
      ?&gt;
    </code></pre>



    <p>Modulus (%)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 20;<br />
        $y = 4;<br />
        echo $x % $y;<br />
      ?&gt;
    </code></pre>



    <p>Exponentation (**)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 3;<br />
        $y = 3;<br />
        echo $x ** $y;<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>Assignment Operators</h2>

    <p>Assignment operators are used with numeric values to write a value to a variable.</p>

    <p>The basic asignment operator in PHP is the equals (=) sign. It means that the left operand gets set to the value of the assignment expression on the right.</p>

    <h3>Examples: assignment operators</h3>

    <p>Equals (=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 12;<br />
        echo $x;<br />
      ?&gt;
    </code></pre>



    <p>Addition (+=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 5;<br />
        $x += 3;<br />
        echo $x;<br />
      ?&gt;
    </code></pre>



    <p>Subtraction (-=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 33;<br />
        $x -= 5;<br />
        echo $x;<br />
      ?&gt;
    </code></pre>



    <p>Multiplication (*=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 45;<br />
        $x *= 2;<br />
        echo $x;<br />
      ?&gt;
    </code></pre>



    <p>Division (/=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 8;<br />
        $x /= 2;<br />
        echo $x;<br />
      ?&gt;
    </code></pre>



    <p>Modulus (%)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 11;<br />
        $x %= 3;<br />
        echo $x;<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>Comparison Operators</h2>

    <p>Comparison operators are used to compare two values (numbers and strings).</p>

    <h3>Examples: comparison operators</h3>

    <p>Equal (==)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 5;<br />
        $y = 5;<br />
        var_dump($x == $y);<br />
      ?&gt;
    </code></pre>



    <p>Identical (===)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 6;<br />
        $y = 6;<br />
        var_dump($x === $y);<br />
      ?&gt;
    </code></pre>



    <p>Not Equal (!=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 4;<br />
        $y = 7;<br />
        var_dump($x != $y);<br />
      ?&gt;
    </code></pre>



    <p>Not Identical (!==)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 9;<br />
        $y = 9;<br />
        var_dump($x !== $y);<br />
      ?&gt;
    </code></pre>

    <p>Greater Than (>)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 7;<br />
        $y = 5;<br />
        var_dump($x &gt; $y);<br />
      ?&gt;
    </code></pre>

    <p>Less Than (<)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 9;<br />
        $y = 7;<br />
        var_dump($x &lt; $y);<br />
      ?&gt;
    </code></pre>



    <p>Greater Than for Equal To (>=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 4;<br />
        $y = 8;<br />
        var_dump($x &gt;= $y);<br />
      ?&gt;
    </code></pre>



    <p>Less Than or Equal To (<=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 6;<br />
        $y = 12;<br />
        var_dump($x &lt;= $y);<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>Increment/Decrement</h2>

    <p>Increment operator is used to increment a variable's value.</p>

    <p>Decrement operator is used to decrement a variable's value.</p>

    <h3>Examples: increment/decrement operators</h3>

    <p>Pre-increment (++$x)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 5;<br />
        echo ++$x;<br />
      ?&gt;
    </code></pre>



    <p>Post-increment ($x++)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 7;<br />
        echo $x++;<br />
      ?&gt;
    </code></pre>



    <p>Pre-decrement (--$x)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 8;<br />
        echo --$x;<br />
      ?&gt;
    </code></pre>

    <p>Post-decrement ($x--)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 4;<br />
        echo $x--;<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>PHP Logical Operators</h2>

    <p>Logical operators are used to combine logical statements.</p>

    <h3>Examples: logical operators</h3>

    <p>And</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 100;<br />
        $y = 50;<br />
        if ($x == 100 and $y == 50) {<br />
            echo "Hello World!";<br />
        }<br />
      ?&gt;
    </code></pre>



    <p>Or</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 100;<br />
        $y = 50;<br />
        if ($x == 100 or $y == 50) {<br />
            echo "Very Good!";<br />
        }<br />
      ?&gt;
    </code></pre>



    <p>Xor</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 100;<br />
        $y = 50;<br />
        if ($x == 100 xor $y == 75) {<br />
            echo "Hello World!";<br />
        }<br />
      ?&gt;
    </code></pre>



    <p>And</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 100;<br />
        $y = 50;<br />
        if ($x == 100 &amp;&amp; $y == 50) {<br />
            echo "Very Good!";<br />
        }<br />
      ?&gt;
    </code></pre>



    <p>Or (||)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 100;<br />
        $y = 50;<br />
        if ($x == 100 || $y == 25) {<br />
            echo "Great!";<br />
        }<br />
      ?&gt;
    </code></pre>



    <p>Not (!)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 100;<br />
        $y = 50;<br />
        if ($x !== 50) {<br />
            echo "Very Good!";<br />
        }<br />
      ?&gt;
    </code></pre>




    <hr />

    <h2>String Operators</h2>

    <p>Operators specifically designed for strings:</p>

    <h3>Examples: string operators</h3>

    <p>Concatenation (.)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $txt1 = "Hello ";<br />
        $txt2 = "World!";<br />
        echo $txt1.$txt2;<br />
      ?&gt;
    </code></pre>



    <p>Concatenation Assignment (append) (.=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $txt1 = "Hello ";<br />
        $txt2 = "World!";<br />
        $txt1.=$txt2;<br />
        echo $txt1;<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>Array Operators</h2>

    <p>Array operators are used to compare arrays.</p>

    <p>Union (+)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = array("a" =&gt; "red", "b" =&gt; "blue");<br />
        $y = array("c" =&gt; "green", "d" =&gt; "yellow");<br />
  <br />
        print_r($x + $y);<br />
      ?&gt;
    </code></pre>



    <p>Equality (==)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = array("a" =&gt; "red", "b" =&gt; "blue");<br />
        $y = array("c" =&gt; "green", "d" =&gt; "yellow");<br />
  <br />
        var_dump($x == $y);<br />
      ?&gt;
    </code></pre>



    <p>Indentity (===)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = array("a" =&gt; "red", "b" =&gt; "blue");<br />
        $y = array("c" =&gt; "green", "d" =&gt; "yellow");<br />
  <br />
        var_dump($x === $y);<br />
      ?&gt;
    </code></pre>



    <p>Inequality (!=)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = array("a" =&gt; "red", "b" =&gt; "blue");<br />
        $y = array("c" =&gt; "green", "d" =&gt; "yellow");<br />
  <br />
        var_dump($x != $y);<br />
      ?&gt;
    </code></pre>



    <p>Inequality (< >)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = array("a" =&gt; "red", "b" =&gt; "blue");<br />
        $y = array("c" =&gt; "green", "d" =&gt; "yellow");<br />
  <br />
        var_dump($x &lt;&gt; $y);<br />
      ?&gt;
    </code></pre>



    <p>Non-identity (!==)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = array("a" =&gt; "red", "b" =&gt; "blue");<br />
        $y = array("c" =&gt; "green", "d" =&gt; "yellow");<br />
  <br />
        var_dump($x !== $y);<br />
      ?&gt;
    </code></pre>



  </body>
</html>
