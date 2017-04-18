<!DOCTYPE html>
<html>
  <head>
    <title>Sorting Arrays</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Sorting Arrays</h1>

    <p>The elements in an array can be sorted in alphabetical or numberical order, descending or ascending.</p>

    <hr />

    <h2>Sort Functions</h2>

    <p>PHP has the following array sort functions:</p>

    <ul>
      <li>sort() - sort arrays in ascending order</li>
      <li>rsort() - sort arrays in descending order</li>
      <li>asort() - sort associative arrays in ascending order, according to the value</li>
      <li>ksort() - sort associative arrays in ascending order, according to the key</li>
      <li>arsort() - sort associative arrays in descending order, according to to the value</li>
      <li>krsort() - sort associative arrays in descending order, according to the key</li>
    </ul>

    <hr />

    <h2>sort()</h2>

    <h3>Example: sort() - ascending/alphabetical</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $numbers = array(4, 6, 2, 22, 11);<br />
        sort($numbers);<br />
  <br />
        $arrlength = count($numbers);<br />
          for ($x = 0; $x &lt; $arrlength; $x++) {<br />
              echo $numbers[$x];<br />
              echo "&lt;br /&gt;";<br />
          }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Example: sort() - ascending/numerical</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $numbers = array(4, 6, 2, 22, 11);<br />
        sort($numbers);<br />
  <br />
        $arrlength = count($numbers);<br />
        for ($x = 0; $x &lt; $arrlength; $x++) {<br />
            echo $numbers[$x];<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Example: rsort() - descending</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $cars = array("Volvo", "BMW", "Toyota");<br />
        rsort($cars);<br />
  <br />
        $carlength = count($cars);<br />
        for ($x = 0; $x &lt; $carlength; $x++) {<br />
            echo $cars[$x];<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Example: rsort() - descending/numberical</h2>

    <pre><code class="language-php">
      &lt;?php<br />
        $numbers = array(4, 6, 2, 22, 11);<br />
        rsort($numbers);<br />
  <br />
        $numlength = count($numbers);<br />
        for ($x = 0; $x &lt; $numlength; $x++) {<br />
            echo $numbers[$x];<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Example: asort() - ascending/value</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $age = array("Peter"=&gt;"35", "Ben"=&gt;"37", "Joe"=&gt;"43");<br />
        asort($age);<br />
  <br />
        foreach ($age as $x =&gt; $x_value) {<br />
            echo  $x . " , " . $x_value;<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Example: ksort() - ascending/key</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $age = array("Peter"=&gt;"45", "Ben"=&gt;"37", "Joe"=&gt;"25");<br />
        ksort($age);<br />
  <br />
        foreach ($age as $x =&gt; $x_value) {<br />
            echo $x . " , " . $x_value;<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Example: arsort() - descending/value</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $age = array("John"=&gt;"45", "Ben"=&gt;"37", "Joe"=&gt;"46");<br />
        arsort($age);<br />
  <br />
        foreach ($age as $x =&gt; $x_value) {<br />
            echo $x . " , " . $x_value;<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Example: krsort() - descending/key</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $age = array("Kyle"=&gt;"49", "Joe"=&gt;"37", "Ben"=&gt;"45");<br />
        krsort($age);<br />
  <br />
        foreach ($age as $x =&gt; $x_value) {<br />
            echo $x . " , " . $x_value;<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

  </body>
</html>
