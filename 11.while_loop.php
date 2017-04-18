<!DOCTYPE html>
<html>
  <head>
    <title>While Loops</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>While Loops</h1>

    <p>PHP while loops execute a block of code while the specified condition is true.</p>

    <p>Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several, almost equal code-lines in a script, we can use loops.</p>

    <p>In PHP we have the following loop statements:</p>

    <ul>
      <li>while: loops through a block of code as long as a specified condition is true</li>
      <li>do...while: loops through a block of code once, and then repeats the loop as long as the specified condition is true</li>
      <li>for: loops through a block of code a specified number of times</li>
      <li>foreach: loops through a block of code for each element in an array</li>
    </ul>

    <hr />

    <h2>The while Loop</h2>

    <p>The while loop executes a block of code as long as the specified condition is true:</p>

    <pre><code>
      while (condition is true) {
        code to be executed;
      }
    </code></pre>

    <h3>Example: while loop</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 1;<br />
  <br />
        while ($x &lt;= 5) {<br />
            echo "The number is: $x &lt;br /&gt;";<br />
            $x++;<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>The do...while Loop</h2>

    <p>The do...while loop always executes the block of code at least once. It will then check the condition, and repeat the loop while the specified condition is true.</p>

    <pre><code>
      do {
        code to be executed;
      } while (condition is true);
    </code></pre>

    <h3>Example: do...while loop</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 1;<br />
        do {<br />
            echo "The number is: $x &lt;br /&gt;";<br />
            $x++;<br />
        } while ($x &lt;= 5);<br />
      ?&gt;
    </code></pre>



    <p><strong>Note:</strong> in a do...while loop, the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false the first time.</p>

  </body>
</html>
