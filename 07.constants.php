<!DOCTYPE html>
<html>
  <head>
    <title>Constants</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Constants</h1>

    <p>Constants are like variables except that once they are defined, they cannot be changed or undefined.</p>

    <hr />

    <h2>Constants</h2>

    <p>A contstant is an identifier (name) for a simple value. The value cannot be changed during the script.</p>

    <p>A valid constant name starts with a letter or underscore (no $ before the constant name).</p>

    <p><strong>Note:</strong> Unlike variables, constants are automatically global accross the entire script.</p>

    <hr />

    <h2>Create a Constant</h2>

    <p>To create a constant, use the <b>define()</b> function.</p>

    <pre><code>
      define(name, value, case-insensitive)
    </code></pre>

    <p>Parameters:</p>

    <ul>
      <li>name: specifies the name of the constant</li>
      <li>value: specifies the value of the constant</li>
      <li>case-insensitive: specifies whether the constant name should be case-insensitive. Default is false</li>
    </ul>

    <h3>Example: define(name, value, default)</h3>

    <p>Case sensitive:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        define("Greeting", "Hello There!");<br />
        echo Greeting;<br />
      ?&gt;
    </code></pre>

    <p>Case insensitive:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        define("Greeting", "Hello There!", true);<br />
        echo greeting;<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Constants are Global</h2>

    <p>Constants are automatically global and can be used accross the entire script.</p>

    <h3>Example: constants are global</h3>

    <p>Constant defined outside function; used inside function:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        define("Greeting", "Hello There!");<br />
  <br />
        function myTest()<br />
        {<br />
            echo Greeting;<br />
        }<br />
  <br />
        myTest();<br />
      ?&gt;
    </code></pre>

  </body>
</html>
