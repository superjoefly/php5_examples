<!DOCTYPE html>
<html>
  <head>
    <title>echo and print Statements</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Echo and Print Statements</h1>

    <p>In PHP there are two basic ways to get output: echo and print.</p>

    <hr />

    <h2>PHP echo and print Statements</h2>

    <p>Echo and print are more or less the same. They are both used to ouput data to the screen.</p>

    <p>Differences: echo has no return value while print has a return value of 1 so it can be used in expressions. Echo can take multiple parameters (although such usage is rare) while print can take only one argument. Echo is marginally faster than print.</p>

    <hr />

    <h2>The PHP Echo Statement</h2>

    <p>The echo statement can be used with or without parentheses: echo or echo().</p>

    <h3>Example: (display text)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo "&lt;h2&gt;PHP is Fun!&lt;/h2&gt;";<br />
        echo "Hello World!&lt;br /&gt;";<br />
        echo "I'm about to learn PHP!&lt;br /&gt;";<br />
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h3>Example (display variables)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $txt1 = "Learn PHP";<br />
        $txt2 = "W3Schools";<br />
        $x = 5;<br />
        $y = 4;<br />
  <br />
        echo "&lt;h2&gt;$txt1&lt;/h2&gt;";<br />
        echo "Study PHP at $txt2&lt;br /&gt;";<br />
        echo $x + $y;<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h2>The PHP Print Statement</h2>

    <p>The print statement can be used with or without parentheses: print or print().</p>

    <h3>Example (display text)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        print "&lt;h2&gt;PHP is Fun!&lt;/h2&gt;";<br />
        print "Hello World!&lt;br /&gt;";<br />
        print "I'm about to learn PHP!";<br />
      ?&gt;<br />
  <br />

    </code></pre>

    <hr />

    <h3>Example (display variables)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $txt1 = "Learn PHP";<br />
        $txt2 = "W3Schools";<br />
        $x = 5;<br />
        $y = 6;<br />
  <br />
        print "&lt;h2&gt;$txt1&lt;/h2&gt;";<br />
        print "Study PHP at $txt2&lt;br /&gt;";<br />
        print $x + $y;<br />
      ?&gt;<br />
  <br />
    </code></pre>

  </body>
</html>
