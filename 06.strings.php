<!DOCTYPE html>
<html>
  <head>
    <title>Strings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Strings</h1>

    <p>A string is a sequence of characters, like "Hello World!".</p>

    <hr />

    <h2>String Functions</h2>

    <p>Commonly used functions to manipulate strings.</p>

    <hr />

    <h2>Get Length</h2>

    <p>The PHP <b>strlen()</b> function returns the length of a string.</p>

    <h3>Example: strlen()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo strlen("Hello World!");  // outputs 12<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h2>Count Words</h2>

    <p>The PHP <b>str_word_count()</b> function counts the number of words in a string:</p>

    <h3>Example: str_word_count()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo str_word_count("Hello World!"); //output is 2<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h2>Reverse String</h2>

    <p>The PHP <b>strrev()</b> function reverses a string:</p>

    <h3>Example: strrev()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo strrev("Hello World!");<br />
      ?&gt;<br />

    </code></pre>

    <hr />

    <h2>Search for Text</h2>

    <p>The PHP <b>strpos()</b> function searches for a specific text within a string.</p>

    <p>If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</p>

    <h3>Example: strpos()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo strpos("Hello World!", "World");  // is case sensitive<br />
      ?&gt;
    </code></pre>

    <p><strong>Note:</strong> the first character position in a string is 0.</p>

    <hr />

    <h2>Replace Text</h2>

    <p>The PHP <b>str_replace()</b> function replaces some characters with some other characters in a string.</p>

    <h3>Example: str_replace()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo str_replace("World", "Dolly", "Hello World");<br />
      ?&gt;
    </code></pre>

  </body>
</html>
