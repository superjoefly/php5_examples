<!DOCTYPE html>
<html>
  <head>
    <title>Switch Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Switch Statement</h1>

    <p>The switch statement is used to perform different actions based on different conditions.</p>

    <p>Use the switch statement to select one of many blocks of code to be executed:</p>

    <pre><code>
      switch (n) {
        case label1:
          code to be executed if n = label1;
          break;
        case label2:
          code to be executed if n = label2;
          break;
        case label2;
          code to be executed if n = label3;
          break;
        ...
        defaul:
          code to be executed if n is not equal to any of the labels;
      }
    </code></pre>

    <p>Starting with a single expression (n) most often a variable, that is evaluated once. The value of the expression is then compared with the values of each case in the structure. If there is a match, the block of code associated with that case is executed. The break keyword is used to prevent the code from running into the next case if a match is found. The default statement is used if no match is found.</p>

    <hr />

    <h3>Example: switch statement</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $favcolor = "blue";<br />
  <br />
        switch ($favcolor) {<br />
          case "red":<br />
            echo "You chose red!";<br />
            break;<br />
          case "blue":<br />
            echo "You chose blue!";<br />
            break;<br />
          case "green":<br />
            echo "You chose green!";<br />
            break;<br />
          default:<br />
            echo "You did not chose red, blue or green!";<br />
          }<br />
      ?&gt;
    </code></pre>

  </body>
</html>
