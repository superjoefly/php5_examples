<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <title>PHP 5 Syntax</title>

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>PHP 5 Syntax</h1>

    <p>A PHP script is executed on the server, and the plain HTML result is sent back to the broser.</p>

    <hr />

    <h2>Basic PHP Syntax</h2>

    <p>A PHP script can be placed anywhere in the document.</p>

    <p>A PHP script starts with <b>< ?php</b> and ends with <b>?></b></p>

    <pre><code class="language-php">
    &lt;?php<br />
     // php code goes here<br />
    ?&gt;
    </code></pre>

    <p>The default file extension for PHP files is <b>.php</b></p>

    <p>A PHP file normally contains HTML tags, and some PHP scripting code.</p>

    <h3>Example ("Hello World!")</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo "Hello World!";<br />
      ?&gt;
    </code></pre>

    <p><strong>Note:</strong> PHP statements end with a semicolon (;)</p>

    <hr />

    <h2>Comments</h2>

    <p>A comment in PHP code is a line that is not read/executed as part of the program. Its only purpose is to be read by someone who is looking at the code.</p>

    <p>Comments are used to:</p>

    <ul>
      <li>Let others understand your code</li>
      <li>Remind yourself of what you did.</li>
    </ul>

    <p>PHP supports several ways of commenting:</p>

    <p>Use //... for single line comments</p>
    <p>Use #... for single line comments</p>
    <p>Use /*...*/ for multi line comments</p>
    <p>Comments can be put in the middle of code lines to comment out parts/sections of code</p>

    <hr />

    <h2>PHP Case Sensitivity</h2>

    <p>In PHP, all keywords (e.g. if, else, while, echo, etc), classes, functions, and user-defined functions are NOT case sensitive.</p>

    <h3>Example (legal):</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo "Hello World!&lt;br /&gt;";<br />
        echo "Hello World!&lt;br /&gt;";<br />
        echo "Hello World!";<br />
      ?&gt;
    </code></pre>

    <p>However, all variable names are case-sensitive.</p>

    <h3>Example (variable names):</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $color = "red";<br />
        echo "My car is " . $color . "&lt;br /&gt;";<br />
        echo "My car is " . $COLOR . "&lt;br /&gt;";<br />
        echo "My car is " . $coLOR . "&lt;br /&gt;";<br />
      ?&gt;
    </code></pre>

  </body>
</html>
