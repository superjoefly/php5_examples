<!DOCTYPE html>
<html>
  <head>
    <title>For Loops</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>For Loops</h1>

    <p>PHP for loops execute a block of code a specified number of times.</p>

    <p>The for loop is used when you know in advance how many times the script should run.</p>

    <pre><code>
      for (init counter; test counter; increment counter) {
        code to be executed;
      }
    </code></pre>

    <p>Parameters:</p>

    <ul>
      <li>init counter: initialize the loop counter value</li>
      <li>test counter: evaluate for each loop iteration; if it evaluates to TRUE, the loop continues, if it evaluates to FALSE, the loop ends</li>
      <li>increment counter: increases the loop counter value</li>
    </ul>

    <hr />

    <h3>Example: for loop</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        for ($x = 0; $x &lt;= 10; $x++) {<br />
            echo "The number is: $x &lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>The foreach Loop</h2>

    <p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</p>

    <pre><code>
      foreach ($array as $value) {
        code to be executed;
      }
    </code></pre>

    <p>For each loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.</p>

    <h3>Example: foreach loop</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $colors = array("red", "green", "blue", "yellow");<br />
  <br />
        foreach ($colors as $value) {<br />
            echo "$value &lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

  </body>
</html>
