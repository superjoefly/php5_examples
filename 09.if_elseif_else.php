<!DOCTYPE html>
<html>
  <head>
    <title>if...elseif...else</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>if...elseif...else Statements</h1>

    <p>Conditional statements are used to perform different actions based on different conditions.</p>

    <h2>Conditional Statements</h2>

    <p>You can use conditional statements to perform different actions for different conditions.</p>

    <p>PHP has the following conditional statements:</p>

    <ul>
      <li>if statement: executes some code if one condition is true</li>
      <li>if...else statement: executes some code if a condition is true, and some other code if the same condition is false</li>
      <li>if...elseif...else: executes different code for more than two conditions</li>
      <li>switch statement: selects one of many blocks of code to be executed</li>
    </ul>

    <hr />

    <h2>The if Statement</h2>

    <p>The if statement executes some code if one condition is true:</p>

    <pre><code>
      if (condition) {
        code to be executed if condition is true;
      }
    </code></pre>

    <h3>Example: if statement</h3>

    <p>The following code will execute if the time, in hours, is less than 20:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $t = date("H");<br />
    <br />
        if ($t &lt; "20") {<br />
            echo "Have a Good Day!";<br />
        }<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>The if...else Statement</h2>

    <p>The if...else statement executes some code if a condition is true, and some other code if the same condition is false:</p>

    <pre><code>
      if (condition) {
        code to be executed if condition is true;
      } else {
        code to be executed if the same condition is false;
      }
    </code></pre>

    <h3>Example: if...else</h3>

    <p>The example below will output "Have a good day!" if the current time in hours is less than 20, and "Have a good night!" otherwise:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $t = date("H");<br />
  <br />
        if ($t &lt; "20") {<br />
            echo "Have a good day!";<br />
        } else {<br />
            echo "Have a good night!";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    </h2>The if...elseif...else Statement</h2>

    <p>The if...elseif...else statement executes different codes for more than two conditions:</p>

    <pre><code>
      if (condition) {
        code to be executed if this condition is true;
      } elseif (condition) {
        code to be executed if this condition is true;
      } else {
        code to be executed if all conditions are false;
      }
    </code></pre>

    <p>The example below will output "Have a good morning!" if the current time in hours is less than 10, "Have a good day!" if the current time in hours is less than 20, and "Have a good night" otherwise:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $t = date("H");<br />
  <br />
        if ($t &lt; "10") {<br />
            echo "Have a good morning!";<br />
        } elseif ($t &lt; "20") {<br />
            echo "Have a good day!";<br />
        } else {<br />
            echo "Have a good night!";<br />
        }<br />
      ?&gt;
    </code></pre>

  </body>
</html>
